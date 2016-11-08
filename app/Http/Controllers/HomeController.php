<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function index(\Illuminate\Http\Request $request) {
        return view("home.index");
    }

}
