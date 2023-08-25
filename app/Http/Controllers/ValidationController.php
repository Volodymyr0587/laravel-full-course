<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ValidationController extends Controller
{
    public function store(Request $request)
    {

        $user = $request->user();

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'age' => ['nullable', 'integer', 'min:10', 'max:100'], // 123
            'amount' => ['required', 'numeric', 'min:1', 'max:9999999'], // 123 or 123.45
            'gender' => ['nullable', 'string', 'in:male,female'],
            'zip' => ['required', 'digits:6'], // 123456
            'subscription' => ['nullable', 'boolean'], // true/false/1/0
            'agreement' => ['accepted'], // true/1/yes/on
            'password' => ['required', 'string', 'min:7', 'confirmed'], // pasword_confirmation
            'password_confirmation' => ['required', 'string', 'min:7'],
            'current_password' => ['required', 'string', 'current_password'], // current password
            'email' => ['required', 'string', 'email', 'exists:user,email'], // mail@example.com
            'country_id' => ['required', 'integer', 'exists:coutries,id'],
            // 'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'phone' => ['required', 'string', new Phone, Rule::unique('users', 'phone')->ignore($user)],
            'website' => ['nullable', 'string', 'url'], // https:://example.com
            'uuid' => ['nullable', 'string', 'uuid'], //sdfsdf-sdfsdf-sdfsdf-sdfsdf
            'ip' => ['nullable', 'string', 'ip'], // 127.0.0.1
            'avatar' => ['required', 'file', 'image', 'max:1024'], // 1Mb
            'birth_date' => ['nullable', 'string', 'date'], // 2023-08-25 / 25-08-2023 17:07:07
            'start_date' => ['required', 'string', 'date', 'after_or_equal:today'],
            'finish_date' => ['required', 'string', 'date', 'after:start_date'],
            'delivery' =>

        ]);

        dd($validated);
    }
}
