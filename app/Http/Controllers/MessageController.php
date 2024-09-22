<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

use App\Models\User;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::get();
        return view('admin/messages', compact('messages'));
    }


    public function create()
    {
        
        return view('public/contact');
    }


    public function sendEmail(Request $request)
    {


        $data = $request->except('_token');
        Mail::to('to@example.com')->send((new ContactMail($data)));

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'message' => 'required|string|max:1000',
            'email' => 'required|email|unique:users,email',

        ]);

        Message::create($data);
        return redirect()->route('email_create')->with('success', 'Message sent successfully!');

        // return redirect()->route('messages.index');
        // return "message sent successfully";
    }


    public function show(string $id)
    {
        $message=Message::findOrFail($id);
        return view('admin/message_details', compact('message'));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function forceDelete(string $id)
    {
             message::where('id',$id)->forceDelete($id);
             return redirect()->route('messages.index');
    }
}
