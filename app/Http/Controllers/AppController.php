<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // home page
    public function index()
    {
        $title = 'Home Page';
        return view('pages.home', compact('title'));
    }
    // about page
    public function about()
    {
        $title = 'About Page';
        $heading = 'About Us';
        return view('pages.about', compact('title', 'heading'));
    }
    // services page
    public function services()
    {
        $title = 'Services Page';
        $heading = 'Our Services';
        return view('pages.services',compact('heading','title'));
    }
    // team page
    public function team()
    {
        $title = 'Teams Page';
        $heading = 'Our Team';
        return view('pages.team',compact('heading','title'));
    }
    // projects page
    public function projects()
    {
        $title = 'Projects Page';
        $heading = 'Our Projects';
        return view('pages.projects',compact('heading','title'));
    }
    // contact page
    public function contact()
    {
        $title = 'Contact Page';
        $heading = 'Contact Us';
        return view('pages.contact',compact('heading','title'));
    }
    // news page
    public function news()
    {
        $title = 'News Page';
        $heading = 'News';
        return view('pages.news',compact('heading','title'));
    }
    // terms page
    public function terms()
    {
        $title = 'Terms and conditions';
        $heading = 'Terms';
        return view('pages.terms',compact('heading','title'));
    }
    // privacy page
    public function privacy()
    {
        $title = 'Privacy Page';
        $heading = 'Privacy';
        return view('pages.privacy',compact('heading','title'));
    }
}
