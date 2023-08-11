<header class="py-3 w-full border-b-2">
    <div class="container">
        <div class="flex justify-between">
            <div class="px-4">
                <a href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>
            </div>
            <div>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('register') }}">Registration</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
