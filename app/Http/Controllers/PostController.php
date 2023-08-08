<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'List of posts';
    }

    public function create()
    {
        return 'Create post';
    }

    public function store()
    {
        return 'Store post';
    }

    public function show()
    {
        return 'View single post';
    }

    public function edit()
    {
        return 'Edit post';
    }

    public function update()
    {
        return 'Update post';
    }

    public function destroy()
    {
        return 'Delete post';
    }

    public function like()
    {
        return 'Like + 1';
    }
}
