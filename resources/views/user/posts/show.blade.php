@extends('layouts.layout')

@section('page.title', 'View Post')

@section('content')
    <main class="py-3">
        <x-title>{{ __('View Post') }}</x-title>

        <div class="mt-10">

            <div class="mb-4">


                <h4 class="text-xl">{{ $post->title }}</h4>

                <div class="flex space-x-2 ml-10">
                    <x-time-stamp>
                        Created <i><b>{{ $post->created_at }}</b></i>
                    </x-time-stamp>
                    <x-time-stamp>
                        Updated <i><b>{{ $post->updated_at }}</b></i>
                    </x-time-stamp>
                </div>

                <x-post-body>
                    {{ $post->body }}
                </x-post-body>
            </div>

        </div>
    </main>
@endsection
