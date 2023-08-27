<main class="flex grow py-3">


    <div>
        <x-form.form-header>
            {{ __('Login') }}
        </x-form.form-header>

        <x-form.form action="{{ route('login.store') }}" method="POST">

            <x-form.form-input-block>
                <x-form.form-label for="email">
                    {{ __('Email') }}
                </x-form.form-label>
                <x-form.form-input name="email" id="email" type="email" placeholder="Email"  autofocus />
            </x-form.form-input-block>
            <x-error name="email"/>

            <x-form.form-input-block>
                <x-form.form-label for="password">
                    {{ __('Password') }}
                </x-form.form-label>
                <x-form.form-input name="password" id="password" type="password" placeholder="******************" />
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </x-form.form-input-block>
            <x-error name="password"/>

            <x-form.remember-me name="remember" id="remember" type="checkbox" value=true :checked="!! old('remember')">
                {{ __('Remeber Me') }}
            </x-form.remember-me>

            <x-form.form-buttons-block>
                <x-button type="submit" class="">
                    {{ __('Sign In') }}
                </x-button>
                <x-form.form-login-register-link href="{{ route('register') }}">
                    {{ __('Register') }}
                </x-form.form-login-register-link>
            </x-form.form-buttons-block>

        </x-form.form>

    </div>

</main>
