<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $data = $request->only(['name', 'password']);
        // $data = $request->except(['name', 'password']);
        // dd($data);

        $name = $request->input('name');
        // $email = $request->email;
        $email = $request->input('email');

        // $agreement = !! $request->agreement;
        $agreement = $request->boolean('agreement');

        dd($name, $email, $agreement);

        return "Register new user";
    }
}
