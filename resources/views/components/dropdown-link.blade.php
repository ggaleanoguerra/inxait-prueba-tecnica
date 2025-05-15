@props(['href'])

<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-left text-sm text-white hover:text-amber-500 hover:bg-gray-800 focus:outline-none transition duration-200']) }} href="{{ $href }}">
    {{ $slot }}
</a>
