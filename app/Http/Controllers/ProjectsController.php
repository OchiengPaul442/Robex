<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Http\Requests\StoreprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;

class ProjectsController extends Controller
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
        $title = 'Projects Upload';
        return view('Admin.pages.projects', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprojectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprojectsRequest $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'description' => 'required|max:255',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . 'project' . '.' . $request->image->extension();

        // $request->image->move(public_path('/assets/images'), $imageName);
        
        $request->image->storeAs('public/images', $imageName);

        // creating new object for news
        $news = new projects;

        // saving the news data in database
        $news->projectname = $request->name;
        $news->description = $request->description;
        $news->status = $request->status;
        $news->image = $imageName;

        $result = $news->save();

        // error checks
        if ($result) {
            return redirect()->route('projects.create')->with('success', 'Project created successfully.');
        } else {
            return redirect()->route('projects.create')->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
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
        $title = 'Edit Project';
        $data = projects::find($id);
        return view('Admin.pages.projects', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojectsRequest  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojectsRequest $request, $id)
    {
        $request->validate([
            'name' => 'required|max:55',
            'description' => 'required|max:255',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $projects = projects::find($id);

        // image update
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . 'news' . '.' . $request->image->extension();

            // $request->image->move(public_path('/assets/images'), $imageName);

            $request->image->storeAs('public/images', $imageName);

            $projects->image = $imageName;
        }

        // updating the news data in database
        $projects->projectname = $request->name;
        $projects->description = $request->description;
        $projects->status = $request->status;
        // timestamps update
        $projects->updated_at = now();

        // upate the data
        $result = $projects->save();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Project updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = projects::find($id);
        $result = $projects->delete();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'Project deleted successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }
}
