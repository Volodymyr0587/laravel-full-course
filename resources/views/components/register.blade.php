<main class="flex grow py-3">

    <div>
        <x-form-header>
            {{ __('Register') }}
        </x-form-header>

        <x-form>

            <x-form-input-block>
                <x-form-label for="email">
                    {{ __('Email') }}
                </x-form-label>
                <x-form-input name="email" id="email" type="email" placeholder="Email" autofocus></x-form-input>
            </x-form-input-block>

            <x-form-input-block>
                <x-form-label for="name">
                    {{ __('Name') }}
                </x-form-label>
                <x-form-input name="name" id="name" type="text" placeholder="Name"></x-form-input>
            </x-form-input-block>

            <x-form-input-block>
                <x-form-label for="password">
                    {{ __('Password') }}
                </x-form-label>
                <x-form-input name="password" id="password" type="password"
                    placeholder="******************"></x-form-input>
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </x-form-input-block>

            <x-form-input-block>
                <x-form-label for="password">
                    {{ __('Confirm password') }}
                </x-form-label>
                <x-form-input name="password_confirmation" id="password_confirmation" type="password"
                    placeholder="******************"></x-form-input>
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </x-form-input-block>

            <x-remember-me name="agreement" id="agreement" type="checkbox" value="">
                {{ __('I agree to the processing of personal data') }}
            </x-remember-me>

            <x-form-buttons-block>
                <x-button type="submit" class="">
                    {{ __('Register') }}
                </x-button>
                <x-form-login-register-link href="{{ route('login') }}">
                    {{ __('Login') }}
                </x-form-login-register-link>
            </x-form-buttons-block>

        </x-form>

    </div>

</main>
