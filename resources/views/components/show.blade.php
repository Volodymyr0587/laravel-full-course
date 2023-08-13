<main>
    <a href="{{ route('blog') }}" class="text-blue-500 hover:text-blue-300">Back</a>

    <x-title>{{ $post->title }}</x-title>

    <x-post-body>
        {{ $post->body }}
    </x-post-body>
</main>
