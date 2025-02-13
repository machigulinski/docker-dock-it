<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $location;

    /**
     * @param array|string[] $location
     */
    public function __construct() {
        $this->location = [
            'city'          => 'Lake Zurich',
            'city_state'    => 'Lake Zurich, IL',
            'geo_tags' => [
                'region' => 'US-IL',
                'position' => '41.389776; -81.441226',
                'ICBM' => '41.389776, -81.441226'
                ]
        ];
    }

}
