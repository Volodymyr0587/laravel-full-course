<main class="py-3">
    <x-title>Posts list</x-title>

    <div class="mt-10">
        @if ($posts)
            @foreach ($posts as $post)
                <div class="mb-4">
                    <p>{{ $post->id }}</p>

                    <a href="{{ route('blog.show', $post->id) }}" class="text-blue-500 hover:text-blue-300">
                        <h4 class="text-lg">{{ $post->title }}</h4>
                    </a>

                    <x-post-body>
                        {{ $post->body }}
                    </x-post-body>
                    <x-time-stamp>
                        Created {{ $post->created_at }}
                    </x-time-stamp>
                    <x-time-stamp>
                        Updated {{ $post->updated_at }}
                    </x-time-stamp>
                </div>
            @endforeach
        @else
            <p>{{ __('No posts yet') }}</p>
        @endif
    </div>
</main>
