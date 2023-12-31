<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index()
    {
        // return app('view')->make('login.index');

        // return view()->make('login.index');

        // return View::make('login.index');

        // $foo = session()->get('foo');
        // $foo = session('foo');
        // dd($foo);

        // dd(session()->has('test'));
        // dd(session()->all());

        return view('login.index');
    }

    public function store(Request $request)
    {
        // $session = app()->make('session');
        // $session = app('session');
        // $session = session();
        // $session = Session::get('key');

        // session()->put('foo', 'bar');

        // session([
        //     'foo' => 'Bar',
        //     'name' => 'Volodymyr'
        // ]);

        // dd($session);

        // DELETE DATA FROM SESSION
        // session()->forget('foo');
        // session()->flush();

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
        // return back()->withInput()->with('success', 'You have successfully logged in');

        return redirect()->route('user.posts')->with('success', 'You have successfully logged in');


        // if (true) {
        //     return back()->withInput();
        // }
    }
}
