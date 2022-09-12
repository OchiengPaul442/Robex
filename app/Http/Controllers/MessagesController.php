<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Http\Requests\StoremessagesRequest;

class MessagesController extends Controller
{
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
            return response()->json(['success' => 'Message sent successfully!']);
        } else {
            return response()->json(['error' => 'Error! Message not sent, please try again.']);
        }
    }
}
