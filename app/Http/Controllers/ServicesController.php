<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return view('services');
    }
    public function index1() {
        return view('contact');
    }
    public function index2() {
        return view('about');
    }
}
