<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
     ##index page

    public function index(){
     return view("index");
    }

    public function aboutUs(){
        return view("about-us");
    }

    public function contactUs(){
        return view("contact-us");
    }

    public function blogs(){
        return view("blogs");
    }

    public function blog(){
        return view("blog");
    }
}
