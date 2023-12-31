<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // /** @var Post $post */
        // $post = Post::query()->first();

        // dd($post->getAttribute('title'));

        // dd($post->title);

        // $post->title = 'foo'; // __set($key, $value)

        // dd($post->isPublished());

        // dd($post);

        //* select * from posts
        // $posts = Post::all();

        // //* select id, title, published_at from posts
        // $posts = Post::all(['id', 'title', 'published_at']);

        // //* select * from posts
        // $posts = Post::query()->get(); // Post::all()

        // //* select id, title, published_at from posts
        // $posts = Post::query()->get(['id', 'title', 'published_at']);

        // // dd($posts->toArray());

        // //* Limit number of queries (select * from posts limit 10)
        // $posts = Post::query()->limit(10)->get();

        // //* select * from posts limit 10 offset 10
        // $posts = Post::query()->limit(10)->offset(10)->get();

        // //? PAGINATION
        // $validated = $request->validate([
        //     'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
        //     'page' => ['nullable', 'integer', 'min:1', 'max:100'],
        // ]);

        // $page = $validated['page'] ?? 1;
        // $limit = $validated['limit'] ?? 10;
        // $offset = $limit * ($page - 1);

        // $posts = Post::query()->limit($limit)->offset($offset)->get();
        // //? END PAGINATION

        // //* BUILD-IN LARAVEL PAGINATION
        // $posts = Post::query()->paginate($limit);

        //? SORTING DATA (SELECT * FROM posts ORDER BY published_at DESC)
        // $posts = Post::query()->orderBy('published_at', 'desc')->paginate($limit);

        //? Alias for sorting desc
        // $posts = Post::query()->latest('published_at')->paginate($limit);

        //? Alias for orderBy asc
        // $posts = Post::query()->oldest('published_at')->paginate($limit); // orderBy asc

        //? Several sorting parameters
        // $posts = Post::query()
        //     ->latest('published_at')
        //     ->oldest('id')
        //     ->paginate($limit);

        // $posts = Post::query()->latest('published_at')->paginate(10);

        // УМОВИ
        //* where
        // $posts = Post::query()
        //     ->where('id', '=', 1027) //?  Можна використовувати `!=`,  `>`, `<`, `>=`, `<=`
        //     ->paginate(10);

        // $posts = Post::query()
        //     ->where('is_publish', true)
        //     ->paginate(10);

        // //* whereColumn
        // $posts = Post::query()
        //     ->whereColumn('title', 'body')
        //     ->paginate(10);

        // //* like
        // $search = 'dolor';

        // $posts = Post::query()
        //     ->where('title', 'like', "%{$search}%")
        //     ->paginate(10);

        // //* where published_at is null
        // $posts = Post::query()
        //     // ->where('published_at', null) // 'published_at', '!=',  null
        //     // ->whereNull('published_at')
        //     ->whereNotNull('published_at')
        //     ->paginate(10);

        // //* toSql()
        // $posts = Post::query()
        //     ->whereNull('published_at')
        //     ->offset(10)
        //     ->toSql();

        // //* where id in (1017, 1018, 1019)
        // $posts = Post::query()
        //     // ->whereIn('id', [1017, 1018, 1019])
        //     ->whereNotIn('id', [1017, 1018, 1019])
        //     ->paginate(10);

        // //* whereDate, whereYear, whereMonth, whereDay
        // $posts = Post::query()
        //     // ->whereDate('published_at', new Carbon('2023-08-12'))
        //     ->whereDate('published_at', '>',  new Carbon('2023-08-12'))
        //     // ->whereYear('published_at', 2023)
        //     // ->whereMonth('published_at', 1)
        //     // ->whereDay('published_at', 13)
        //     ->paginate(10);

        // //* whereBetween
        // $posts = Post::query()
        //     // ->whereBetween('id', [1024, 1035]) // 1024 <= id <= 1035
        //     ->whereBetween('published_at', [
        //         new Carbon('2023-01-01'),
        //         new Carbon('2023-01-20')
        //     ])->paginate(10);

        // //* Several conditions
        // //* select * from `posts` where `is_publish` = ? and `published_at` is not null
        // $posts = Post::query()
        //     ->where('is_publish', true)
        //     ->whereNotNull('published_at')
        //     ->paginate(10);

        // //* AND OR
        // $posts = Post::query()
        //     ->where('is_publish', true)
        //     ->whereNotNull('published_at')
        //     ->orWhere('id', 1019)
        //     ->paginate(10);

        // //* GROUP CONDITION
        // //* select * from `posts` where (`is_publish` = ? and `published_at` is not null) or `id` = ?
        // // $posts = dd(Post::query()
        // //     ->where(function (Builder $query) {
        // //         $query->where('is_publish', true)
        // //             ->whereNotNull('published_at');
        // //     })
        // //     ->orWhere('id', 1019)
        // //     ->toSql());
        // //     // ->paginate(10);

        // $posts = Post::query()
        //     ->where('is_publish', true)
        //     ->where(function (Builder $query) {
        //         $query->where('id', 1019)
        //             ->orWhereNotNull('published_at');
        //     })->paginate(10);


        // //* Method WHEN
        // $fromDate = new Carbon('2023-08-01 00:00:00');
        // // $fromDate = null;
        // $toDate = new Carbon('2023-08-31 23:59:59');

        // $posts = Post::query()
        //     ->when($fromDate, function (Builder $query, Carbon $fromDate) {
        //         $query->where('published_at', '>=', $fromDate);
        //     }, function (Builder $query) {
        //         $query->where('published_at', '>=', now()->startOfYear());
        //     })->paginate(10);

        // //* Alternatives for WHEN method:
        //     //* #1
        // $query = Post::query();

        // if ($fromDate) {
        //     $query->where('published_at', '>=', $fromDate);
        // } else {
        //     $query->where('published_at', '>=', now()->startOfYear());
        // }
        //     //* #2
        // $fromDate
        //     ? $query->where('published_at', '>=', $fromDate)
        //     : $query->where('published_at', '>=', now()->startOfYear());

        // $posts = $query->paginate(10);

        $categories = [
            null => __('All categories'),
            1 => __('First category'),
            2 => __('Second category')
        ];

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'from_date' => ['nullable', 'string', 'date'],
            'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
            'tag' => ['nullable', 'string', 'max:10'],
        ]);

        $query = Post::query()
            ->where('is_publish', true)
            ->whereNotNull('published_at');

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($fromDate = $validated['from_ate'] ?? null) {
            $query->where('published_at', '>=', new Carbon($fromDate));
        }

        if ($toDate = $validated['to_date'] ?? null) {
            $query->where('published_at', '<=', new Carbon($toDate));
        }

        if ($tag = $validated['tag'] ?? null) {
            $query->whereJsonContains('tags', $tag);
        }

        $posts = $query->latest('published_at')
            ->paginate(10);

        return view('blog.index', compact('posts', 'categories'));
    }

    // public function show(Request $request, $post)
    // {
    // $post = (object) [
    //     'id' => rand(1, 100),
    //     'title' => 'Lorem ipsum dolor sit amet.',
    //     'body' => 'Lorem ipsum ,dolor sit, amet consectetur adipisicing elit. Sit, deleniti impedit voluptatibus sequi inventore ratione molestias totam aperiam reprehenderit dicta nisi perspiciatis laborum quibusdam! A officiis dolores consectetur magni. Ea.',
    //     'created_at' => Carbon::now()->diffForHumans(),
    //     'updated_at' => Carbon::now()->diffForHumans()
    // ];

    //* select * from posts order by published_at asc limit 1
    // $post = Post::query()->oldest('published_at')->first();
    // $post = Post::query()->oldest('published_at')->first(['id' , 'title']);

    // $post = Post::query()
    //     ->where('user_id', 2034)
    //     ->oldest('published_at')
    //     ->first(['id' , 'title']);

    // if (is_null($post)) {
    //     abort(404);
    // }

    //? firstOrFail
    // $post = Post::query()
    //     // ->where('user_id', 2034)
    //     ->oldest('published_at')
    //     ->firstOrFail(['id' , 'title']);

    //? find
    //* select id, title, body from posts where id = 123 limit 1
    // $post = Post::query()->find($post, ['id', 'title', 'body']);

    // //? findOrFail
    // $post = Post::query()->findOrFail($post, ['id', 'title', 'body']);


    // dd($post);

    //     $post = Post::query()->findOrFail($post);

    //     return view('blog.show', compact('post'));
    // }


    //? ROUTE MODEL BINDING (прив'язка моделі до маршруту)
    public function show(Request $request, Post $post)
    {
        return view('blog.show', compact('post'));
    }

    //? CACHING
    // public function show(Request $request, $post)
    // {
    //     $post = cache()->remember(
    //         key: "posts.{$post}",
    //         ttl: now()->addHour(),
    //         callback: function () use ($post) {
    //             // info('cache test');
    //             return Post::query()->findOrFail($post);
    //     });

    //     return view('blog.show', compact('post'));
    // }

    public function like($post)
    {
        return "Like post";
    }
}
