<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'category', 'message']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->gender = $request->input('gender');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');
        $contact->address = $request->input('address');
        $contact->building = $request->input('building');
        $contact->category = $request->input('category');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('thanks');
    }


    public function thanks()
    {
        return view('thanks');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function admin()
    {
        return view('admin');
    }

    
}
