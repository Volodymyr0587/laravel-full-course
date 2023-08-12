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

            <div class="flex items-center justify-between">
                <x-button>
                    {{ __('Register') }}
                </x-button>
                <a href="{{ route('login') }}"
                    class="inline-block align-baseline font-bold text-sm text-emerald-900 hover:text-cyan-400">
                    {{ __('Login') }}
                </a>
            </div>

        </x-form>

    </div>

</main>
