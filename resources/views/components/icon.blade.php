@props(['name', 'size' => 'md'])

@php
    $sizeClasses = [
        'sm' => 'w-4 h-4',
        'md' => 'w-6 h-6',
        'lg' => 'w-8 h-8',
        'xl' => 'w-16 h-16',
    ][$size] ?? 'w-6 h-6';

    $isExternalSvg = in_array($name, ['sword', 'pickaxe', 'diamond', 'creeper']);
@endphp

<div {{ $attributes->merge(['class' => "inline-flex items-center justify-center $sizeClasses drop-shadow-[2px_2px_0_rgba(0,0,0,0.5)]"]) }}>
    @if ($isExternalSvg)
        <img src="{{ asset('vendor/craftui/svgs/' . $name . '.svg') }}" alt="{{ $name }} icon" class="w-full h-full object-contain" style="image-rendering: pixelated;" loading="lazy" />
    @else
        <!-- generic block icon fallback -->
        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full" style="image-rendering: pixelated;">
            <rect x="2" y="2" width="12" height="12" fill="#D0D1D4" />
        </svg>
    @endif
</div>
