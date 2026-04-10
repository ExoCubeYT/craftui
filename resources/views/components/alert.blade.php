@props(['type' => 'info', 'icon' => null])

@php
    $typeConfig = [
        'success' => ['title' => 'Advancement Made!', 'color' => 'text-[#55FF55]'],
        'error' => ['title' => 'Error Occurred', 'color' => 'text-[#FF5555]'],
        'warning' => ['title' => 'Warning!', 'color' => 'text-[#FFAA00]'],
        'info' => ['title' => 'Notice', 'color' => 'text-[#A8A8A8]'],
    ];
    $config = $typeConfig[$type] ?? $typeConfig['info'];
@endphp

<div {{ $attributes->merge(['class' => 'flex items-start gap-4 px-4 py-3 bg-[#242424] border-[3px] border-[#1E1E1F] text-[#D0D1D4] shadow-[inset_0_0_0_2px_#3A3A3A] drop-shadow-[2px_2px_0_rgba(0,0,0,0.5)] font-minecraft']) }}>
    @if ($icon)
        <x-craftui-icon name="{{ $icon }}" size="lg" />
    @endif
    <div class="flex-1 mt-0.5">
        <div class="{{ $config['color'] }} text-xs mb-1 drop-shadow-[1px_1px_0_rgba(0,0,0,1)]">{{ $config['title'] }}</div>
        <div class="text-white text-sm drop-shadow-[1px_1px_0_rgba(0,0,0,1)] leading-snug">{{ $slot }}</div>
    </div>
</div>
