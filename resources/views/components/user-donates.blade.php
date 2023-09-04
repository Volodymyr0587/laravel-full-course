@section('page.title', 'My Donats')

<main class="py-3">

    <x-title>

        {{ __('My Donats') }}

    </x-title>

    <div class="mt-10">

        {{-- @include('user.donates.filter') --}}
        @include('user.donates.stats')
        {{-- @include('user.donates.table') --}}

    </div>

</main>
