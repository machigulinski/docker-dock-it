<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    public function all_services() {
        return view('services.all-services')->with('location', $this->location);
    }

    public function sinks_toilets() {
            return view('services.sinks-toilets')->with('location', $this->location);
        }

    public function sump_pumps() {
        return view('services.sump-pumps')->with('location', $this->location);
    }

    public function water_heaters() {
        return view('services.water-heaters')->with('location', $this->location);
    }

    public function drain_services() {
        return view('services.drain-services')->with('location', $this->location);
    }

    public function rpz_backflow() {
        return view('services.rpz-backflow')->with('location', $this->location);
    }

    public function garbage_disposals () {
        return view('services.garbage-disposals')->with('location', $this->location);
    }
}
