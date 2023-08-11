<main>
    <h1 class="text-2xl font-bold">Posts list</h1>

    <div class="mt-10">
        @if ($posts)
            @foreach ($posts as $post)
                <div class="mb-4">
                    <p>{{ $post->id }}</p>

                    <a href="{{ route('blog.show', $post->id) }}" class="text-blue-500 hover:text-blue-300">
                        <h4 class="text-lg">{{ $post->title }}</h4>
                    </a>

                    <p>
                        {{ $post->body }}
                    </p>
                    <p>
                        {{ $post->created_at }}
                    </p>
                    <p>
                        {{ $post->updated_at }}
                    </p>
                </div>
            @endforeach
        @else
            <p>No posts yet</p>
        @endif
    </div>
</main>
