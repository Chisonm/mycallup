<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //home page
    public function homePage()
    {
        return view('welcome');
    }

    //about page
    public function aboutPage()
    {
        return view('pages.about-us');
    }

    //contact page
    public function contactPage()
    {
        return view('pages.contact-us');
    }

    // servicePage
    public function servicePage()
    {
        return view('pages.services');
    }

    //faqs page
    public function faqsPage()
    {
        return view('pages.faqs');
    }
}
