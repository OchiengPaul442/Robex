<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // home page
    public function index()
    {
        $title = 'Robex-co';
        return view('layouts.index', compact('title'));
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
