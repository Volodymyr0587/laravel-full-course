@props(['color' => 'bg-emerald-900'])
<a
{{ $attributes->merge(['class' => "{$color} hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline",
                        'type' => 'button'])}}>
    {{ $slot }}
</a>
