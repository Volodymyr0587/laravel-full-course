<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;


class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        // actions


        // response

        // return 'Test';

        // $response = app()->make('response');
        // $response = app('response');
        // $response = response();
        // $response = Response::make('qwerty');


        // return response('test', 200, [
        //     'foo' => 'bar',
        // ]);

        // return response('Test');

        // return ['foo' => 'bar'];

        //* select * from posts limit 10 offset 0
        // Post::query()->chunk(10, function(Collection $posts) {
        //     dd($posts);
        // });

        return response()->json(['foo' => 'bar']);

    }
}
