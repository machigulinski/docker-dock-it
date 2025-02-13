<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view('contact')->with('location', $this->location);;
    }

    public function submitForm() {

        request()->validate([
            'firstname'=>'required|min:2',
            'lastname'=>'required|min:2',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'location'=>'required|min:4',
            'message'=>'required|min:10|max:1000'
        ]);

        $firstName  = request('firstname');
        $lastName   = request('lastname');
        $email      = request('email');
        $phone      = request('phone');
        $location   = request('location');
        $message    = request('message');

        $name = $firstName . ' ' . $lastName;
        $type = 'contact form';

        $data = array (
            'name'      => $name,
            'email'     => $email,
            'phone'     => $phone,
            'location'  => $location,
            'message'   => $message,
            'type'      => $type
        );

        Mail::to('getmaximumplumbing@gmail.com')->cc(['gmaxalina@gmail.com','info@maximumplumbing.net'])->bcc('eastwaywebdesign@gmail.com')->send(new SendMail($data));
//        Mail::to('eastwaywebdesign@gmail.com')->send(new SendMail($data));

        session(['success'=> 'Thank you, '  .  $name . ' for contacting us. We will get back to you shortly.']);

        return redirect()->action( [ContactController::class, 'requestSubmitted']);
    }


    public function requestSubmitted(Request $request) {

        if($request->session()->get('success')) {

            $data = [
                'success_note'  => $request->session()->get('success'),
            ];

            $request->session()->forget('success');
            return view('thank-you', $data)->with('location', $this->location);;;

        } else {

            return redirect()->action([WelcomeController::class, 'index']);
        }
    }
}
