@props(['label', 'name'])

<div class="w-full space-y-1">
    <x-form.label :for="$name">{{ $label ?? $name }}</x-form.label>
    
    <input
        {{ $attributes }}
        class="w-full px-2 py-1 text-xl text-gray-800 ring-1 ring-gray-300 focus:ring focus:outline-none focus:ring-blue-300 rounded-sm placeholder:font-light placeholder:text-gray-300"
        name="{{ $name }}">

    @error($name)
        <p class="p-1 text-sm text-white bg-red-400 rounded-sm">{{ $message }}</p>
    @enderror
</div>