<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $contact = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'email',
            'gender',
            'tel',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'detail',
        ]);

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->input('first_name');

        $contact = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'email',
            'gender',
            'tel',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'detail',
        ]);
        Contact::create($contact);
        return view('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}