<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex flex-col items-center justify-between min-h-screen text-center">

        {{-- @include('components.header') --}}

        <x-header />

        <x-flash.flash />

        <main class="flex grow py-3">

            @yield('content')

        </main>

        {{-- @include('components.footer') --}}
        <x-footer />

    </div>
</body>

</html>
