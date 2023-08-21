@if (session('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl top-3 right-3 text-lg"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

@if (session('delete'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="fixed bg-red-500 text-white py-2 px-4 rounded-xl top-3 right-3 text-lg"
    >
        <p>{{ session('delete') }}</p>
    </div>
@endif
