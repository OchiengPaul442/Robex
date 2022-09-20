<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;

class NewsController extends Controller
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
        $title = 'News Upload';
        return view('Admin.pages.news', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorenewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenewsRequest $request)
    {
        $request->validate([
            'newstitle' => 'required:max:50',
            'author' => 'required|max:55',
            'briefdescription' => 'required|max:255',
            'newsarticle' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . 'news' . '.' . $request->image->extension();

        $request->image->move(public_path('/assets/images'), $imageName);

        // creating new object for news
        $news = new news;

        // saving the news data in database
        $news->newstitle = $request->newstitle;
        $news->authorsname = $request->author;
        $news->briefdescription = $request->briefdescription;
        $news->newsarticle = $request->newsarticle;
        $news->image_path = $imageName;

        $result = $news->save();

        // error checks
        if ($result) {
            return redirect()->route('news.create')->with('success', 'News article created successfully.');
        } else {
            return redirect()->route('news.create')->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit New articles';
        $data = news::find($id);
        return view('Admin.pages.news', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenewsRequest  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenewsRequest $request, $id)
    {
        $request->validate([
            'newstitle' => 'required:max:50',
            'author' => 'required|max:55',
            'briefdescription' => 'required|max:255',
            'newsarticle' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news = news::find($id);

        // image update
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . 'news' . '.' . $request->image->extension();

            $request->image->move(public_path('/assets/images'), $imageName);

            $news->image_path = $imageName;
        }

        // updating the news data in database
        $news->newstitle = $request->newstitle;
        $news->authorsname = $request->author;
        $news->briefdescription = $request->briefdescription;
        $news->newsarticle = $request->newsarticle;
        // timestamps update
        $news->updated_at = now();

        // upate the data
        $result = $news->save();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'News article updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = news::find($id);
        $result = $news->delete();

        // error checks
        if ($result) {
            return redirect()->back()->with('success', 'News article deleted successfully.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, try again later.');
        }
    }
}
