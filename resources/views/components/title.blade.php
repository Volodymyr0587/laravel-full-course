<div class="flex justify-between">
    <div class="ml-4">
        <h2 class="text-2xl font-bold">
            {{ $slot }}
        </h2>
    </div>

    @isset($right)
        <div class="ml-20">
            {{ $right }}
        </div>
    @endisset
</div>

{{-- <x-search /> --}}
