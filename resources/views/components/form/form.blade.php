<form {{ $attributes->merge(['class' => 'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4', 'post']) }}>
    @csrf

    {{ $slot }}
</form>

{{-- @isset($right)
    {{ $right }}
@endisset --}}
