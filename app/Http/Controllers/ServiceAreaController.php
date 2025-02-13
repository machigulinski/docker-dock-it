<?php

namespace App\Http\Controllers;

use ILuminate\Http\Request;

class ServiceAreaController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    public function arlington_heights() {
        $this->location = [
            'city'          => 'Arlington Heights',
            'city_state'    => 'Arlington Heights, IL',
            'geo_tags' => [
                'region' => 'US-IL',
                'position' => '42.095; -87.980833',
                'ICBM' => '42.095, -87.980833'
            ]
        ];
        return view('service-area.arlington-heights')->with('location', $this->location);
    }

    public function barrington() {
        $this->location = [
            'city'          => 'Barrington',
            'city_state'    => 'Barrington, IL',
            'geo_tags' => [
                'region' => 'US-IL',
                'position' => '42.153611; -88.131944',
                'ICBM' => '42.153611, -88.131944'
            ]
        ];
        return view('service-area.barrington')->with('location', $this->location);
    }

    public function buffalo_grove() {
        $this->location = [
            'city'          => 'Buffalo Grove',
            'city_state'    => 'Buffalo Grove, IL',
            'geo_tags' => [
                'region' => 'US-IL',
                'position' => '42.166389; -87.963333',
                'ICBM' => '42.166389, -87.963333'
            ]
        ];
        return view('service-area.buffalo-grove')->with('location', $this->location);
    }

    public function vernon_hills() {
        $this->location = [
            'city'          => 'Vernon Hills',
            'city_state'    => 'Vernon Hills, IL',
            'geo_tags' => [
                'region' => 'US-IL',
                'position' => '42.231111; -87.969167',
                'ICBM' => '42.231111, -87.969167'
            ]
        ];
        return view('service-area.vernon-hills')->with('location', $this->location);
    }

    
}
