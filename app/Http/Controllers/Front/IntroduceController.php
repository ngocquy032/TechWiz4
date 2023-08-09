<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    //
    public function showBlog()
    {
        return view('front.introduce.blog');
    }
    public function showAbout()
    {
        return view('front.introduce.aboutUs');
    }
    public function showContact()
    {
        return view('front.introduce.contactUs');
    }
}
