<main>
    <a href="{{ route('blog') }}" class="text-blue-500 hover:text-blue-300">Back</a>

    <x-title>{{ $post->title }}</x-title>

    <div class="mt-10">
        {{ $post->body }}
    </div>
</main>
