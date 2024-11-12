<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Events\NotificationEvent;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $mail = $request->input('mail');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $obj = new Contact();
        $obj->name = $name;
        $obj->email = $mail;
        $obj->subject = $subject;
        $obj->message = $message;
        $obj->save();

        event(new NotificationEvent("You have a new message from {$obj->name}"));
        Log::info('Notification event dispatched.');
        return response()->json(['status' => 'Message sent successfully']);
    }
}
