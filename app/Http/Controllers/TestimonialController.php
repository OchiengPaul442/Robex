<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
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
        $title = 'Testimonials Upload';
        return view('Admin.pages.testimonials', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'occupation' => 'required|max:255',
            'comments' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . 'testimonials' . '.' . $request->image->extension();
        
        $request->image->move(public_path('/assets/images'), $imageName);

        // creating new object for news
        $news = new Testimonial;

        // saving the news data in database
        $news->customername = $request->name;
        $news->occupation = $request->occupation;
        $news->comments = $request->comments;
        $news->profileimage = $imageName;

        $result = $news->save();

        // error checks
        if ($result) {
            return redirect()->route('testimonial.create')->with('success', 'Testimonial added successfully.');
        } else {
            return redirect()->route('testimonial.create')->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Testimonials';
        $data = Testimonial::find($id);
        return view('Admin.pages.testimonials', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, $id)
    {
        $request->validate([
            'name' => 'required|max:55',
            'occupation' => 'required|max:255',
            'comments' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testimonial = Testimonial::find($id);

        // image update
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . 'news' . '.' . $request->image->extension();

            $request->image->move(public_path('/assets/images'), $imageName);

            $testimonial->profileimage = $imageName;
        }

        // updating the news data in database
        $testimonial->customername = $request->name;
        $testimonial->occupation = $request->occupation;
        $testimonial->comments = $request->comments;
        // timestamps update
        $testimonial->updated_at = now();

        // upate the data
        $result = $testimonial->save();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Testimonial updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $result = $testimonial->delete();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Testimonial deleted successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }        
    }
}
