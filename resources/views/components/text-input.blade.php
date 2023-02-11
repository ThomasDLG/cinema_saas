@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-primary-border focus:ring-primary-focus rounded-md shadow-sm']) !!}>
