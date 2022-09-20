<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\news;
use App\Models\Testimonial;


class AppController extends Controller
{
    // home page
    public function index()
    {
        $title = 'Robex-co';
        // $projects = projects::all();
        // $news = news::all();
        // $testimonials = Testimonial::all();
        return view('layouts.site.index', compact('title'));
    }
    // index page
    public function welcome()
    {
        $title = 'Robex-co';
        return view('welcome', compact('title'));
    }
    // terms page
    public function terms()
    {
        $title = 'Terms and conditions';
        $heading = 'Terms';
        return view('pages.policies.terms',compact('heading','title'));
    }
    // privacy page
    public function privacy()
    {
        $title = 'Privacy Page';
        $heading = 'Privacy';
        return view('pages.policies.privacy',compact('heading','title'));
    }

    // service page
    public function service()
    {
        $title = 'Service Page';
        $heading = 'Service';
        return view('pages.service',compact('heading','title'));
    }

    // news page
    public function news()
    {
        $title = 'News Page';
        $heading = 'News';
        return view('pages.news',compact('heading','title'));
    }
}
