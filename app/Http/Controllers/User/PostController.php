<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => rand(1, 100),
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
            'created_at' => Carbon::now()->diffForHumans(),
            'updated_at' => Carbon::now()->diffForHumans()
        ];

        $posts = array_fill(0, 10, $post);
        // $posts = [];

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {

        $title = $request->title;
        $body = $request->body;

        dd($title, $body);

        return 'Store post';
    }

    public function show($post)
    {
        $post = (object) [
            'id' => rand(1, 100),
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
            'created_at' => Carbon::now()->diffForHumans(),
            'updated_at' => Carbon::now()->diffForHumans()
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => rand(1, 100),
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
            'created_at' => Carbon::now()->diffForHumans(),
            'updated_at' => Carbon::now()->diffForHumans()
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update($post)
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
