@extends('layouts.layout')

@section('page.title', 'Edit Post')

@section('content')

    <main class="py-3">
        <div>
            <x-form.form-header>
                {{ __('Edit Post') }}
            </x-form.form-header>

            <x-form.form action="{{ route('user.posts.update', $post->id) }}" method="POST">
                @method('put')
                <x-form.form-input-block>
                    <x-form.form-label required>
                        {{ __('Post title') }}
                    </x-form.form-label>
                    <x-form.form-input name="title" id="title" type="text" placeholder="Title" value="{{ $post->title ?? '' }}"/>
                </x-form.form-input-block>

                <x-form.form-input-block>
                    <x-form.form-label>
                        {{ __('Post Body') }}
                    </x-form.form-label>
                    <x-form.textarea name="body" id="body" type="text" placeholder="Post something" rows="10">{{ $post->body }}</x-form.textarea>
                    {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                </x-form.form-input-block>


                <x-form.form-buttons-block>
                    <x-button type="submit" class="">
                        {{ __('Store') }}
                    </x-button>
                    <x-form.form-login-register-link href="{{ route('user.posts.show', $post->id) }}">
                        {{ __('Cancel') }}
                    </x-form.form-login-register-link>
                </x-form.form-buttons-block>

            </x-form.form>

        </div>
    </main>
@endsection
