@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-white bg-white text-black dark:border-white dark:bg-white dark:text-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
