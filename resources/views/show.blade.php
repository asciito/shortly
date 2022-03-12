<x-layout.app-layout :title="'ID - ' . $shortURL->slug">
    <h1 class="text-xl text-center">
        Hi, I'm going to redirect you in <span class="text-teal-500">5sec</span> to:
        <span class="block text-2xl text-blue-400">{{ $shortURL->url }}</span>

        <span class="inline-block w-10 h-10 rounded-full animate-spin border-[5px] border-gray-200 border-t-blue-400 mt-5"></span>
    </h1>

    <div hidden class="hidden" x-data="{}" x-init="setTimeout(() => window.location = '{{ $shortURL->url }}', 5000)"></div>
</x-layout.app-layout>