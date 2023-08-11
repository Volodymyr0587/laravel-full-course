<header class="py-3 w-full border-b-2">
    <div class="container">
        <div class="flex justify-between">
            <div class="px-4">
                <a href="{{ route('home') }}" class="font-bold text-emerald-900 hover:text-cyan-400">
                    {{ config('app.name') }}
                </a>
            </div>
            <div>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('register') }}" class="font-bold text-emerald-900 hover:text-cyan-400">Registration</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="font-bold text-emerald-900 hover:text-cyan-400">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
