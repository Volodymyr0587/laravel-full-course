<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
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
        //? 1st WAY:
        // $data = $request->validate([
        //     'title' => ['required', 'string', 'max:256'],
        //     'body' => ['required', 'string', 'max:10000'],
        // ]);

        // dd($data);

        //? 2nd WAY (global validator function):
        // $data = validator($request->all(), [
        //     'title' => ['required', 'string', 'max:256'],
        //     'body' => ['required', 'string', 'max:10000'],
        // ])->validate();

        // dd($data);

        //? 3rd WAY:
        // $data = $request->validated(); //! USE StorePostRequest class

        // dd($data);

        //? 4th WAY (own validation helper function):
        $data = data_validate($request->all(), [
            'title' => ['required', 'string', 'max:256'],
            'body' => ['required', 'string', 'max:10000'],
        ]);

        dd($data);


         // Post::create($data);

        return redirect()->route('user.posts.show', 123)->with('success', 'New post has been created');
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

    public function update(Request $request, $post)
    {
        $title = $request->title;
        $body = $request->body;

        // dd($title, $body);

        // return redirect()->route('user.posts.show', $post);

        return redirect()->route('user.posts.show', 123)->with('success', 'The post has been updated successfully'); // or just `return back();`
    }

    public function destroy($post)
    {
        return redirect()->route('user.posts')->with('delete', 'Post deleted successfully');
    }

    public function like()
    {
        return 'Like + 1';
    }
}
