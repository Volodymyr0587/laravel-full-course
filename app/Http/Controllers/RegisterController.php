<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        // $name = $request->input('name');
        // // $email = $request->email;
        // $email = $request->input('email');

        // // $agreement = !! $request->agreement;
        // $agreement = $request->boolean('agreement');
        // dd($agreement);

        // $avatar = $request->file('avatar');

        // dd($name, $email, $agreement, $avatar);

        // dd($request->has('name'), $request->has('agreement'));

        // dd($request->filled('name'));

        // dd($request->missing('name'));

        // if ($name = $request->name) {
        //     $name = strtoupper($name);
        // }

        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $agreement = $request->boolean('agreement');

        // dd($name, $email, $password, $agreement);

        // return "Register new user";

        // return redirect('user');

        // if (true) {
        //     return back()->withInput();
        // }


        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'confirmed'],
            'agreement' => ['accepted'],
        ]);

        $user = new User;

        $user->name = $validated['name']; // $user->setAttribute('name', $validated['name']);
        $user->email = $validated['email'];
        // $user->password = bcrypt($validated['password']);
        $user->password = $validated['password']; // hashed at User model in property $casts

        $user->save();

        dd($user->toArray());

        return redirect()->route('user.posts')->with('success', 'You have successfully registered');
    }
}
