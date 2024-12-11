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
    public function refundPolicy()
    {
        return view('pages.refundPolicy');
    }
    public function shippingPolicy()
    {
        return view('pages.shippingPolicy');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function blogDetail($slug)
    {
        if ($slug == 'Discover-Skootz-Electric-Scooters-Your-Ultimate-Destination-for-E-Scooters') {
            return view('pages.blog1');
        } else if ($slug == 'Unveiling-the-Advantages-of-Electric-Scooters-A-Comprehensive-Guide') {           
            return view('pages.blog2');
        } else {
            abort(404);
        }
    }
    public function faq()
    {
        return view('pages.faq');
    }
}
