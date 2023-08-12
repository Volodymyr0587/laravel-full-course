<header class="py-3 w-full border-b-2">
    <div class="container">
        <div class="flex justify-between">
            <div class="px-4">
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('home') }}" class="{{ active_link('/') }}">
                            {{ __(config('app.name')) }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="{{ active_link('blog') }}">
                            {{ __('Posts') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-4">
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('register') }}"
                            class="{{ active_link('register') }}">
                            {{ __('Register') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="{{ active_link('login') }}">
                            {{ __('Login') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
