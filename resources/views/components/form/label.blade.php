@props(['for'])

<label
    for="{{ $for }}"
    {{ $attributes->merge([
        'class' => 'text-xl capitalize'
    ]) }}>{{ $slot }}</label>