<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $category_id = $request->input('category_id');

        // dd($search, $category_id);

        $post = (object) [
            'id' => rand(1, 100),
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
            'category_id' => 1,
            'created_at' => Carbon::now()->diffForHumans(),
            'updated_at' => Carbon::now()->diffForHumans()
        ];

        $posts = array_fill(0, 10, $post);

        // SEARCH
        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if ($category_id && $post->category_id != $category_id ) {
                return false;
            }

            return true;
        });

        $categories = [null => __('All categories'), 1 => __('First category'), 2 => __('Second category')];

        return view('blog.index', compact('posts', 'categories'));
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
