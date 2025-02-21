@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-yellow-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center text-gray-500 hover:text-yellow-500 transition duration-150 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
