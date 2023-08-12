<header class="py-3 w-full border-b-2">
    <div class="container">
        <div class="flex justify-between">
            <div class="px-4">
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl' : 'font-bold text-emerald-900 hover:text-cyan-400' }}">
                            {{ __(config('app.name')) }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl' : 'font-bold text-emerald-900 hover:text-cyan-400' }}">
                            {{ __('Posts') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-4">
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('register') }}"
                            class="{{ request()->is('register') ? 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl' : 'font-bold text-emerald-900 hover:text-cyan-400' }}">
                            {{ __('Register') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="{{ request()->is('login') ? 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl' : 'font-bold text-emerald-900 hover:text-cyan-400' }}">
                            {{ __('Login') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
