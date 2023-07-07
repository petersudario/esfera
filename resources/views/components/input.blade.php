@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40']) !!}>
