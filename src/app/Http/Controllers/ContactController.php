<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'name1', 'gender', 'email', 'post_code', 'address', 'building_name', 'content']);
        return redirect()->route('contacts.confirm');
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'name1', 'gender', 'email', 'post_code', 'address', 'building_name', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
