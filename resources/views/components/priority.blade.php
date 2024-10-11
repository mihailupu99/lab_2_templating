<!-- resources/views/components/priority.blade.php -->

@props(['priority'])

@php
    $colors = [
        'low' => 'text-green-500',
        'medium' => 'text-yellow-500',
        'high' => 'text-red-500',
    ];

    $icons = [
        'low' => '🟢',
        'medium' => '🟡',
        'high' => '🔴',
    ];
@endphp

<span class="{{ $colors[$priority] ?? 'text-gray-500' }}">
    {{ $icons[$priority] ?? '⚪' }} {{ ucfirst($priority) }} priority
</span>
