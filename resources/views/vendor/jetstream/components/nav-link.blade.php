@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 pt-1 border-b-4 border-buit1 text-basic  font-medium font-montserrat  text-buit1 rounded-b-xl bg-gray-50/50 shadow-inner focus:outline-none focus:border-buit1 transition '
            : 'inline-flex items-center px-3 pt-1 border-b-4 border-transparent  text-basic font-light font-montserrat  text-gray-700 rounded-b-xl hover:text-buit1 hover:border-gray-400 hover:bg-gray-50/50 focus:outline-none focus:text-buit1 focus:border-gray-300 focus:bg-gray-50 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
