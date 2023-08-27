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

        //? 1st METHOD
        // $user = new User;

        // $user->name = $validated['name']; // $user->setAttribute('name', $validated['name']);
        // $user->email = $validated['email'];
        // // $user->password = bcrypt($validated['password']);
        // $user->password = $validated['password']; // hashed at User model in property $casts

        // $user->save();

        // dd(User::query());
        //? 2nd METHOD
        // $user = User::create([
        //     'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => $validated['password'],
        // ]);

        //* 2nd method (short way)
        //$user = User::create($validated);

        //? 3rd METHOD

        $user = User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        $user->save();

        //* ALL METHODS
        // $user = new User(['name' => $validated['name']]);
        // $user->fill(['email' => $validated['email']]);
        // $user->setAttribute('password', $validated['password']);
        // $user->admin = true;
        // $user->foo = 'bar';

        // dd($user->toArray());

        return redirect()->route('user')->with('success', 'You have successfully registered');
    }
}
