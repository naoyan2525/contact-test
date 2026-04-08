<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function thanks()
    {
        return view('thanks');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        return view('admin');
    }

    
}
