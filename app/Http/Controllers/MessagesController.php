<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Http\Requests\StoremessagesRequest;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Client Messages';
        $messages = messages::all();
        return view('Admin.pages.messages', compact('title', 'messages'));        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(messages $messages)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremessagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremessagesRequest $request)
    {
        // validate the form data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required|max:255',
        ]);
        // store in the database
        $message = new messages();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $result = $message->save();

        if ($result) {
            return response()->json(['success' => 'Message sent successfully!, We shall be contacting you within the next three working days, thank you for your response.']);
        } else {
            return response()->json(['error' => 'Error! Message not sent, please try again.']);
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
        //
    }
}
