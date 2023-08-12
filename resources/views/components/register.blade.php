<main class="flex grow py-3">

    <div>
        <x-form-header>
            {{ __('Register') }}
        </x-form-header>

        <x-form>

            <div class="mb-4">
                <x-form-label for="email">
                    {{ __('Email') }}
                </x-form-label>
                <x-form-input name="email" id="email" type="email" placeholder="Email" autofocus></x-form-input>
            </div>

            <div class="mb-6">
                <x-form-label for="password">
                    {{ __('Password') }}
                </x-form-label>
                <x-form-input name="password" id="password" type="password"
                    placeholder="******************"></x-form-input>
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </div>

            <x-remember-me />

            <x-form-buttons-block>
                <x-button>
                    {{ __('Register') }}
                </x-button>
                <x-form-login-register-link href="{{ route('login') }}">
                    {{ __('Login') }}
                </x-form-login-register-link>
            </x-form-buttons-block>

        </x-form>

    </div>

</main>
