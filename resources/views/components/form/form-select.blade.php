@props(['value' => null, 'options' => []])

<select {{ $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) }}>
    @foreach ($options as $key => $text)
        <option value="{{ $key }}" {{ $key == $value ? 'selected' : null }}>
            {{ $text }}
        </option>
    @endforeach
</select>

