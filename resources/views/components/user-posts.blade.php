@section('page.title', 'My Posts')

<main class="py-3">

    <x-search />

    <x-title>

        {{ __('My Posts') }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}">New post</x-button-link>
        </x-slot>
    </x-title>

    <div class="mt-10">
        @if ($posts)
            @foreach ($posts as $post)
                <div class="mb-4">

                    <a href="{{ route('user.posts.show', $post->id) }}" class="text-blue-500 hover:text-blue-300">
                        <h4 class="text-lg">{{ $post->title }}</h4>
                    </a>

                    <x-time-stamp>
                        Created {{ $post->published_at->diffForHumans() }}
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
    {{ $posts->links('pagination::tailwind') }}
</main>
