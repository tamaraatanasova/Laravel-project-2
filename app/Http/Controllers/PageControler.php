<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControler extends Controller
{
    public function home(){
        return view('welcome',  ['backgroundImage' => asset('images/home-bg.jpg')]);
    }
    public function about(){
        return view('about', ['backgroundImage' => asset('images/about-bg.jpg')]);
    }
    public function post(){
        return view('post', ['backgroundImage' => asset('images/blog-image.jpg')]);
    }
    public function contact(){
        return view('contact', ['backgroundImage' => asset('images/contact-bg.jpg')]);
    }
}
