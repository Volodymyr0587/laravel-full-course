<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function show($post)
    {
        return "View single post with id = {$post}";
    }

    public function edit($post)
    {
        return "Edit post with id = {$post}";
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
