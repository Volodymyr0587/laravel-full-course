<div class="flex items-center mb-4">
    <input
    {{ $attributes->merge(['class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600']) }}
    >
    <label class="ml-2 text-gray-700 text-sm font-bold" for="remember">
        {{ $slot }}
    </label>
</div>
