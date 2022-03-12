@if (session('banner')))
    <div
        class="fixed top-20 right-0 rounded-l-sm px-4 py-2 text-white bg-blue-400 text-xl"
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 2500)"
        x-show="show">
        <p>{{ session('banner'); }}</p>
    </div>
@endif