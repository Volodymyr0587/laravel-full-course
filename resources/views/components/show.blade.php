<main>
    <a href="{{ route('blog') }}" class="text-blue-500 hover:text-blue-300">Back</a>

    <h1 class="text-2xl font-bold">{{ $post->title }}</h1>

    <div class="mt-10">
        {{ $post->body }}
    </div>
</main>
