<main class="flex grow py-3">

    <div>
        <x-form.form-header>
            {{ __('Register') }}
        </x-form.form-header>

        <x-form.form action="{{ route('register.store') }}" method="POST">

            <x-form.form-input-block>
                <x-form.form-label for="email">
                    {{ __('Email') }}
                </x-form.form-label>
                <x-form.form-input name="email" id="email" type="email" placeholder="Email"  autofocus></x-form.form-input>
            </x-form.form-input-block>
            <x-error name="email"/>

            <x-form.form-input-block>
                <x-form.form-label for="name">
                    {{ __('Name') }}
                </x-form.form-label>
                <x-form.form-input name="name" id="name" type="text" placeholder="Name"></x-form.form-input>
            </x-form.form-input-block>
            <x-error name="name"/>

            <x-form.form-input-block>
                <x-form.form-label for="password">
                    {{ __('Password') }}
                </x-form.form-label>
                <x-form.form-input name="password" id="password" type="password"
                    placeholder="******************"></x-form.form-input>
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </x-form.form-input-block>
            <x-error name="password"/>

            <x-form.form-input-block>
                <x-form.form-label for="password">
                    {{ __('Confirm password') }}
                </x-form.form-label>
                <x-form.form-input name="password_confirmation" id="password_confirmation" type="password"
                    placeholder="******************"></x-form.form-input>
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </x-form.form-input-block>
            <x-error name="password_confirmation"/>

            <x-form.remember-me name="agreement" id="agreement" type="checkbox" value=true :checked="!! old('agreement')">
                {{ __('I agree to the processing of personal data') }}
            </x-form.remember-me>

            <x-form.form-buttons-block>
                <x-button type="submit" class="">
                    {{ __('Register') }}
                </x-button>
                <x-form.form-login-register-link href="{{ route('login') }}">
                    {{ __('Login') }}
                </x-form.form-login-register-link>
            </x-form.form-buttons-block>
            {{-- <x-slot name="right">
                {{ __('X-SLOT') }}
            </x-slot> --}}
        </x-form.form>

    </div>

</main>
