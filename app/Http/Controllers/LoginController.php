<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index()
    {
        // return app('view')->make('login.index');

        // return view()->make('login.index');

        // return View::make('login.index');

        return view('login.index');
    }

    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember = $request->boolean('remember');

        dd($email, $password, $remember);

        return "Login user";
    }
}
