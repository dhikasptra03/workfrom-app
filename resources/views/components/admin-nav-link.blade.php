@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg d:bg-gray-700 d:hover:bg-gray-600 d:focus:bg-gray-600 d:focus:text-white d:hover:text-white d:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg d:bg-transparent d:hover:bg-gray-600 d:focus:bg-gray-600 d:focus:text-white d:hover:text-white d:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
