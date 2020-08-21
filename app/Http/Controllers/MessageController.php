<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        //
        $messages = Message::where('receiver_user_id', '=', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('message.inbox', compact('messages'));
    }

    public function sent()
    {
        //
        $messages = Message::where('sender_user_id', '=', auth()->user()->id)->orderBy('created_at', 'asc')->get();
        return view('message.inbox', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compose()
    {
        //
        return view('message.compose');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        //
        $recipient_user_id = \App\User::where('email', $request->email_recipient)->first()->id;

        $message = new Message;
        $message->sender_user_id = auth()->user()->id;
        $message->receiver_user_id = $recipient_user_id;
        $message->subject = $request->email_subject;
        $message->body = $request->email_body;
        $message->attachment = 0;
        $message->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        return view('message.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
