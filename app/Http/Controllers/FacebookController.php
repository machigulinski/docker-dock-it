<?php

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FacebookController extends Controller {

    public $fb, $app_id, $app_secret, $user_id, $access_token;

    /**
     * Constructor
     */
    public function __construct() {
        $this->user_id      =  config('services.facebook.user_id');
        $this->app_id       =  config('services.facebook.app_id');
        $this->app_secret   =  config('services.facebook.app_secret');
        $this->access_token =  config('services.facebook.access_token');

        $params = array('app_id' => $this->app_id, 'app_secret' => $this->app_secret, 'default_graph_version' => 'v12.0');

        if (new Facebook($params)) {

            App::instance('fb_api', new Facebook($params));
            $this->fb = App::make('fb_api');

        } else {
            throw new FacebookResponseException();
            throw new FacebookSDKException();
            exit;
        }
    }

    public function displayFacebookPosts() {
        $response = $this->getFacebookPosts();
        $post = '';
        $counter = 0;

//        dump($response);

        foreach ($response as $item) {

            $post_message = $item['message'] ?? null;
            $post_message = $item['attachments']['0']['description'] ?? $post_message;

            $haystack = $item['message'] ?? '';
            $needle = '#plumbingnews';

            if ($counter < 2 && str_contains($haystack, $needle)) {

                $post_message = $this->removeHashtag($post_message);
                $post_message = $this->fixLinks($post_message);
                $post_message = $this->displayContentParagraphs($post_message);

                $post_date = $item['created_time']->format('F j, Y');

                if($counter == 1) {
                    $post .= '<div class="col-lg-6 pb-0">';

                } else {
                    $post .= '<div class="col-lg-6 pb-5 pb-lg-0 px-lg-4">';
                }

                $post .= '<p class="post_date">Posted on: ' . $post_date . '</p>';

                if ($item['attachments'][0]['type'] == 'video_inline'
                    || $item['attachments'][0]['type'] == 'video_direct_response') {

                    $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="video_wrap image_wrap">
                                <video class="fb_video"  controls playsinline="playsinline">
                                    <source src="' . $item['attachments'][0]['media']['source'] . '" type="video/ogg">
                                    <source src="' . $item['attachments'][0]['media']['source'] . '" type="video/avi">
                                    <source src="' . $item['attachments'][0]['media']['source'] . '" type="video/webm">
                                    <source src="' . $item['attachments'][0]['media']['source'] . '" type="video/mp4">
                                </video>
                              </a>';

                } elseif ($item['attachments'][0]['type'] == 'share') {

                    if (isset($item['attachments'][0]['media']['source'])) {

                        $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="video_wrap image_wrap">
                                    <div class="ratio ratio-16x9 fb_video">
                                        <iframe width="560" height="315" src="' . $item['attachments'][0]['media']['source'] . '?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </a>';

                    } elseif (isset($item['attachments'][0]['media']['image']['src'])) {

                        $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="image_wrap">
                                    <img class="content_image cover_image" src="' . $item['attachments'][0]['media']['image']['src'] . '"
                                    alt="IGDR News" title="Local Garage Door Repair Northbrook IL"/>
                                </a>';
                    }

                } elseif (isset($item['attachments'][0]['subattachments'])) {

                    if ($item['attachments'][0]['type'] == 'album') {
                        $indicators = '<div class="carousel-indicators">';

                        $post .= '<div id="fbCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">';
                        $imgcount = 0;

                        foreach ($item['attachments'][0]['subattachments'] as $sub) {

                            if ($imgcount == 0) {
                                $post .= '<div class="carousel-item active" data-bs-interval="4000">';
                                $indicators .= '<button type="button" data-bs-target="#fbCarousel" data-bs-slide-to="'. $imgcount .'" class="active"></button>';
                            } else {
                                $post .= '<div class="carousel-item" data-bs-interval="4000">';
                                $indicators .= '<button type="button" data-bs-target="#fbCarousel" data-bs-slide-to="'. $imgcount .'"></button>';
                            }

                            $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="image_wrap"><img class="content_image cover_image" src="' . $sub['media']['image']['src'] . '"
                                                alt="GDR Service News ' . $imgcount . '" title="Local Garage Door Repair Northbrook IL"/></a></div>';
                            $imgcount++;
                        }

                        $indicators .= '</div>';
                        $post .= $indicators . '</div></div>';

                    } else {
                        $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="image_wrap">
                                        <img class="content_image cover_image" src="' . $item['attachments'][0]['subattachments'][0]['media']['image']['src'] . '"
                                        alt="IGDR News" title="Local Garage Door Repair Northbrook IL"/>
                                     </a>';
                    }

                } else {
                    $post .= '<a href="' . $item['attachments'][0]['url'] . '" target="_blank" class="image_wrap">
                                    <img class="content_image cover_image" src="' . $item['attachments'][0]['media']['image']['src'] . '"
                                    alt="IGDR News" title="Local Garage Door Repair Northbrook IL"/>
                                </a>';
                }
                $post .= '<div class="text mt-1 ps-2 pe-3 pb-2 text-start post_content">' . $post_message . '</div>
                </div>';

                $counter++;
            }
        }
        return $post;
    }


    public function getFacebookPosts() {
        $limit = 25;
//        var_dump('https://graph.facebook.com/'. $this->user_id . '?fields=access_token&access_token=' . $this->access_token);

        if ($this->fb->get(
            '/' . $this->user_id . '/posts?fields=created_time,message,attachments',
            $this->access_token)->getGraphEdge()) {

            // Returns a 'FacebookFacebookResponse' object
            $response = $this->fb->get(
                '/' . $this->user_id . '/posts?fields=created_time,message,attachments&limit=' . $limit,
                $this->access_token)->getGraphEdge()->asArray();

//            dump($response);

        } else {
            throw new FacebookResponseException(e);
            throw new FacebookSDKException(e);
            exit;
        }
        return $response;
    }

    private function fixLinks($content) {
        $pattern = "/(http|ftp|https):\/\/([\w_-]+(?:(?:\.[\w_-]+)+))([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])/";
        $content_words = explode(" ", $content);
        $filtered_content = '';

        foreach($content_words as $word) {

            if(preg_match($pattern, $word)) {
                $word = '<a class="fw_500" target="_blank" href="' . $word . '">click here</a>';
            }
            $filtered_content .= $word . ' ';
        }
        return $filtered_content;
    }

    private function removeHashtag($content) {
        $word = "#plumbingnews";
        $clean_content = '';

        // Test if string contains the word
        if (str_contains($content, $word)) {
            $clean_content = str_replace($word, '', $content);
        } else {
            $clean_content = $content;
        }
        return $clean_content;
    }


    private function displayContentParagraphs($content) {
        $word = "\n\n";
        $content_para = '<p>';

        // Test if string contains the word
        if (str_contains($content, $word)) {
            $content_para .= str_replace($word, '</p><p>', $content);

        } else {
            $content_para .= $content;
        }
        $content_para .= '</p>';

        return $content_para;
    }

    public function getFacebookAlbums() {

        if( $this->fb->get('/' . $this->user_id . '/albums', $this->access_token) ) {
            $albums = $this->fb->get('/' . $this->user_id . '/albums?fields=name,id,cover_photo,description,link,count,type&limit=', $this->access_token)->getGraphEdge()->asArray();

        } else {
            throw new FacebookResponseException(e);
            throw new FacebookSDKException(e);
        }
//        dd($albums);
        return $albums;
    }

    public function fbGetAlbumPhotos($album_id) {
        $limit = 100;

        if($this->fb->get('/' . $album_id . '/photos', $this->access_token)) {
            $photos = $this->fb->get('/' . $album_id . '/photos?fields=id,source,images,created_time&limit='. $limit, $this->access_token)->getGraphEdge()->asArray();

        } else {
            throw new FacebookResponseException(e);
            throw new FacebookSDKException(e);
        }

        return $photos;
    }

    public function getFbAlbumCover($photo_id) {

        if($this->fb->get('/' . $photo_id . '?access_token='. $this->access_token)) {
            $response = $this->fb->get('/' . $photo_id . '?fields=source&access_token='. $this->access_token)->getGraphNode();

        } else {
            throw new FacebookResponseException(e);
            throw new FacebookSDKException(e);
        }
//        dd($response);
        return $response;
    }
}
