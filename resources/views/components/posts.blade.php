<main class="py-3">

    <x-search />

    <x-title>Posts list</x-title>

    <div class="mt-10 grid grid-cols-2 lg:grid-cols-3">
        @if (!$posts->isEmpty())
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
                        {{-- {{ $post->published_at->format('d.m.Y H:i:s') }} --}}
                        {{ $post->published_at?->diffForHumans() }}
                    </x-time-stamp>
                    {{-- <x-time-stamp>
                        Updated {{ $post->updated_at }}
                    </x-time-stamp> --}}
                </div>
            @endforeach
        @else
            <p>{{ __('No posts yet') }}</p>
        @endif
    </div>

    {{-- {{ $posts->links('pagination::simple-tailwind') }} --}}
    {{ $posts->links('pagination::tailwind') }}

</main>
