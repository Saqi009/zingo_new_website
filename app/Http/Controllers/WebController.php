<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }

    public function digital_marketing()
    {
        return view('services.digital_marketing');
    }

    public function graphic_design()
    {
        return view('services.graphic_design');
    }

    public function search_seo()
    {
        return view('services.search_seo');
    }

    public function web_design()
    {
        return view('services.web_design');
    }

    public function web_development()
    {
        return view('services.web_development');
    }

    public function app_development()
    {
        return view('services.app_development');
    }

    public function video_editing()
    {
        return view('services.video_editing');
    }

    public function testimonials()
    {
        return view('services.testimonial');
    }

    public function crm_management()
    {
        return view('services.crm_management');
    }

    public function it_support()
    {
        return view('services.it_support');
    }

    public function personal_assistance()
    {
        return view('services.personal_assistance');
    }

    public function lead_generation()
    {
        return view('services.lead_generation');
    }

    public function cold_calling()
    {
        return view('services.cold_calling');
    }
}
