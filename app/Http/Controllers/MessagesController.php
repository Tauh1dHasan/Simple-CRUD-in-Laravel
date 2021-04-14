<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// connecting Message Model
use App\Models\Message;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // getting all messages from database
    
        // $messages = Message::all();
        $messages = Message::orderBy('id', 'desc')->get();

        return view('message.index')->with('messages', $messages);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // contact form send message function
    
        // getting data from form input
        $currentUserName = $request->input('name');
        
        // Create New Message Object
        $message = new Message;
        // Getting data from input
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // Saving data into the database
        $message->save();
        // Redirect users into Home Page
        return redirect('/')->with('success', $currentUserName . ' Thank you for your message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Showing individual message
        // Getting individual message using Message Model and Eloquent
        $message = Message::find($id);
        return view('message.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::find($id);
        return view('message.edit')->with('message', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Targeting a single row from messages table with $id
        $message = Message::find($id);

        // getting updated values from the edit form
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // saving updated value
        $message->save();

        // redirecting after message update
        return redirect('/readMessage')->with('updated', 'Message Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Targeting a single row from message table with $id
        $message = Message::find($id);

        // deleting single row from message table using Eloquent
        $message->delete();

        // redirecting after message deleted
        return redirect('/readMessage')->with('deleted', 'Message Deleted');
    }
}
