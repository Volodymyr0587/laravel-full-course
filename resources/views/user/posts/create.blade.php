@extends('layouts.layout')

@section('page.title', 'Create Post')

@section('content')

    <main class="py-3">
        <div>
            <x-form.form-header>
                {{ __('Create Post') }}
            </x-form.form-header>

            <x-form.form action="{{ route('user.posts.store') }}" method="POST">

                <x-form.form-input-block>
                    <x-form.form-label required>
                        {{ __('Post title') }}
                    </x-form.form-label>
                    <x-form.form-input name="title" id="title" type="text" placeholder="Title" autofocus />

                    <x-error name="title" />

                </x-form.form-input-block>

                <x-form.form-input-block>
                    <x-form.form-label>
                        {{ __('Post Body') }}
                    </x-form.form-label>
                    <x-form.textarea name="body" id="body" type="text" placeholder="Post something" rows="10">
                        {{ old('body') }}
                    </x-form.textarea>

                    <x-error name="body" />

                    {{-- <x-error name="account" /> --}}

                </x-form.form-input-block>

                <x-form.form-buttons-block>
                    <x-button type="submit" class="">
                        {{ __('Store') }}
                    </x-button>
                    <x-form.form-login-register-link href="{{ route('user.posts') }}">
                        {{ __('Cancel') }}
                    </x-form.form-login-register-link>
                </x-form.form-buttons-block>

            </x-form.form>

        </div>
    </main>
@endsection
