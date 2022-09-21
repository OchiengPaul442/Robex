<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\services;
use App\Models\Testimonial;


class AppController extends Controller
{
    // home page
    public function index()
    {
        $title = 'Cube Engineering';
        // $projects = projects::all();
        // $testimonials = Testimonial::all();
        // $services = services::all();
        // $FAQs = FAQs::all();
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
}
