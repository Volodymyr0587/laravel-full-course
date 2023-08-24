@props(['name' => ''])

<div class="text-red-500 text-sm mt-2">

    @error($name)
        {{ $message }}
    @enderror

</div>
