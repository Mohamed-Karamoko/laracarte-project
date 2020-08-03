<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use App\Http\Requests\ContactRequest;


class ContactsController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        return new ContactMessageCreated($request->name, $request->email, $request->message);
    }
}
