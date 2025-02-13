<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        return view('welcome')->with('location', $this->location);
    }
}
