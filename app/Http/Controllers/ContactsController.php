<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;


class ContactsController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
        Mail::to('admin@laracarte.com')->send($mailable);

        return 'Done !';
    }
}
