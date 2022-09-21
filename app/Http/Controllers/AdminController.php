<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\projects;
use App\Models\Testimonial;
use App\Models\messages;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use App\Models\FAQs;
use App\Models\services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    // dashboard
    public function index()
    {
        $title = 'Admin login';
        return view('Admin.Auth.login', compact('title'));
    }

    // dashboard
    public function dashboard(projects $projects, Testimonial $testimonials)
    {
        $title = 'Admin Dashboard';
        // get all data from database
        $projects = projects::all();
        $testimonials = Testimonial::all();
        $messages = messages::all();
        $services = services::all();
        $FAQs = FAQs::all();
        // count items
        $projectsCount = $projects->count();
        $testimonialsCount = $testimonials->count();
        $messagesCount = messages::count();
        $servicesCount = services::count();

        return view('Admin.pages.dashboard', compact('title', 'projects', 'testimonials', 'services', 'FAQs','servicesCount', 'projectsCount', 'testimonialsCount', 'messagesCount'));
    }

    // profile form page
    public function profile()
    {
        $title = 'Profile';
        return view('Admin.pages.profile', compact('title'));
    }

    // login admin
    public function login(StoreadminRequest $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin = admin::where('email', $request->email)->first();
        if ($admin) {
            // password hashing
            if (Hash::check($request->password, $admin->password)) {
                // get session
                session(['userID' => $admin->id]);
                session(['userEmail' => $admin->email]);
                return redirect()->route('admin.dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return Redirect()->route('admin.login')->with('fail', 'The provided credentials do not match our records.');
        }
    }

    // logout admin
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojectsRequest  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadminRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
