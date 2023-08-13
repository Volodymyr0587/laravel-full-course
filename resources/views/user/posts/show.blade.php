@extends('layouts.layout')

@section('page.title', 'View Post')

@section('content')
    <main class="py-3">
        <x-title>{{ __('View Post') }}</x-title>

        <div class="mt-10">

            <div class="mb-4">

                <a href="{{ route('user.posts.show', $post->id) }}" class="text-blue-500 hover:text-blue-300">
                    <h4 class="text-lg">{{ $post->title }}</h4>
                </a>

                <x-time-stamp>
                    Created {{ $post->created_at }}
                </x-time-stamp>
                <x-time-stamp>
                    Updated {{ $post->updated_at }}
                </x-time-stamp>

            </div>

        </div>
    </main>
@endsection
