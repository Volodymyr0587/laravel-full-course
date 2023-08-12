<main class="flex grow py-3">


    <div>
        <x-form-header>
            {{ __('Login') }}
        </x-form-header>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    {{ __('Email') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" id="email" type="email" placeholder="Email" autofocus>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    {{ __('Password') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="password" id="password" type="password" placeholder="******************">
                {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </div>
            <div class="flex items-center mb-4">
                <input
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    name="remember" id="remember" type="checkbox" value="">
                <label class="ml-2 text-gray-700 text-sm font-bold" for="remember">
                    {{ __('Remeber Me') }}
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-emerald-900 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    {{ __('Sign In') }}
                </button>
                <a href="{{ route('register') }}"
                    class="inline-block align-baseline font-bold text-sm text-emerald-900 hover:text-cyan-400">
                    {{ __('Register') }}
                </a>
            </div>
        </form>
    </div>

</main>
