<x-layout.app-layout title="Create Short Link">
    <h1 class="text-4xl font-light mb-4">Create a new short <span class="text-blue-400">link</span></h1>

    <form action="{{ route('store') }}" method="POST" class="w-full sm:max-w-lg space-y-4">
        <x-form.input
            type="url"
            name="url"
            placeholder="https://example.com/foo/bar?fizz=buzz"
            value="{{ old('link') ?? '' }}"
            />

        <x-form.textarea
            name="description"
            label="Short description"
            placeholder="Lorem ipsum dolor it...">{{ old('description') ?? '' }}</x-form.textarea>

        @csrf

        <x-form.button type="submit">Create</x-form.button>
    </form>
</x-layout.app-layout>