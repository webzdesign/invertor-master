<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.aboutUs');
    }

    public function testimonial()
    {
        return view('pages.testimonial');
    }

    public function contactUs()
    {
        return view('pages.contactUs');
    }

    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }

    public function termConditions()
    {
        return view('pages.termConditions');
    }
}
