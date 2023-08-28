<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categories = [
            null => __('All categories'),
            1 => __('First category'),
            2 => __('Second category')];

        // /** @var Post $post */
        // $post = Post::query()->first();

        // dd($post->getAttribute('title'));

        // dd($post->title);

        // $post->title = 'foo'; // __set($key, $value)

        // dd($post->isPublished());

        // dd($post);

        //* select * from posts
        $posts = Post::all();

        //* select id, title, published_at from posts
        $posts = Post::all(['id', 'title', 'published_at']);

        //* select * from posts
        $posts = Post::query()->get(); // Post::all()

        //* select id, title, published_at from posts
        $posts = Post::query()->get(['id', 'title', 'published_at']);

        // dd($posts->toArray());

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
