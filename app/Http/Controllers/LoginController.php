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
        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // dd($ip, $path, $url);

        // dd($request->is('log*'));
        // dd($request->routeIs('log*'));

        $email = $request->email;
        $password = $request->password;
        $remember = $request->boolean('remember');

        // dd($email, $password, $remember);

        // return "Login user";

        // return response()->redirectTo('/foo');

        // return response()->redirectToRoute('user');
        // return back()->withInput();
        // return redirect('user');

        if (true) {
            return back()->withInput();
        }
    }
}
