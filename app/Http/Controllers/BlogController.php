<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return 'Posts in blog';
    }

    public function show()
    {
        return 'Single post in blog';
    }

    public function like($post)
    {
        return "Like post";
    }
}
