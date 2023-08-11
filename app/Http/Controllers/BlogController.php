<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
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



        return view('blog.index', compact('posts'));
    }

    public function show()
    {
        $post = (object) [
            'id' => rand(1, 100),
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
            'created_at' => Carbon::now()->diffForHumans(),
            'updated_at' => Carbon::now()->diffForHumans()
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return "Like post";
    }
}
