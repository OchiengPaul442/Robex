<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Service Upload';
        return view('Admin.pages.services', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreservicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreservicesRequest $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'description' => 'required|max:255',
            'details' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . 'service' . '.' . $request->image->extension();

        $request->image->move(public_path('/assets/images'), $imageName);

        // creating new object for services
        $services = new services;

        // saving the services data in database
        $services->name = $request->name;
        $services->description = $request->description;
        $services->details = $request->details;
        $services->image = $imageName;

        $result = $services->save();

        // error checks
        if ($result) {
            return redirect()->route('service.create')->with('success', 'Service created successfully.');
        } else {
            return redirect()->route('service.create')->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Service';
        $service = services::find($id);
        return view('pages.service', compact('title', 'service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Service Edit';
        $service = services::find($id);
        return view('Admin.pages.services', compact('title', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateservicesRequest  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateservicesRequest $request, $id)
    {
        $request->validate([
            'name' => 'required|max:55',
            'description' => 'required|max:255',
            'details' => 'required|between:10,600',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $services = services::find($id);

        // image update
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . 'service' . '.' . $request->image->extension();

            $request->image->move(public_path('/assets/images'), $imageName);

            $services->image = $imageName;
        }

        // updating the news data in database
        $services->name = $request->name;
        $services->description = $request->description;
        $services->details = $request->details;

        // timestamps update
        $services->updated_at = now();

        // upate the data
        $result = $services->save();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Service updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = services::find($id);

        $result = $services->delete();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Service deleted successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }
}
