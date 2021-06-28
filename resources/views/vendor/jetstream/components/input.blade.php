@props(['disabled' => false])

<!-- imputs -->
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-blue-300 focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
