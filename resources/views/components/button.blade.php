@props(['variant' => 'primary'])

@php
    $baseClasses = 'relative inline-flex items-center justify-center px-4 py-3 font-minecraft text-white transition-all active:top-[2px] active:shadow-none min-w-[120px] select-none';
    
    $borders = 'border-[3px] border-[#1E1E1F]';

    $variants = [
        'primary' => [
            'bg' => 'bg-[#3C8527]',
            'shadow' => 'shadow-[inset_0px_-6px_0px_0px_#1D4D13,inset_3px_3px_0_rgba(79,145,60,0.75),inset_-3px_-9px_0_#639D52]',
            'hover' => 'hover:bg-[#2A641C]'
        ],
        'secondary' => [
            'bg' => 'bg-[#7345E5]',
            'shadow' => 'shadow-[inset_0px_-6px_0px_0px_#3D1E8A,inset_3px_3px_0_rgba(138,92,243,0.75),inset_-3px_-9px_0_#8E61FF]',
            'hover' => 'hover:bg-[#5D2CC6]'
        ],
        'tertiary' => [
            'bg' => 'bg-[#D0D1D4]',
            'text' => 'text-[#313233]',
            'shadow' => 'shadow-[inset_0px_-6px_0px_0px_#6C6E72,inset_3px_3px_0_rgba(255,255,255,0.75),inset_-3px_-9px_0_#E5E6E8]',
            'hover' => 'hover:bg-[#B5B6B8]'
        ],
        'danger' => [
            'bg' => 'bg-[#D32F2F]',
            'text' => 'text-white',
            'shadow' => 'shadow-[inset_0px_-6px_0px_0px_#8E1C1C,inset_3px_3px_0_rgba(238,82,82,0.75),inset_-3px_-9px_0_#F05454]',
            'hover' => 'hover:bg-[#B71C1C]'
        ],
    ];

    $style = $variants[$variant] ?? $variants['primary'];
    $textClass = $style['text'] ?? '';
    
    $mergedClasses = trim("$baseClasses $borders {$style['bg']} {$style['shadow']} {$style['hover']} $textClass");
@endphp

<button {{ $attributes->merge(['class' => $mergedClasses]) }}>
    <span class="block relative z-10 tracking-wide text-sm drop-shadow-[2px_2px_0_rgba(0,0,0,0.4)]" wire:loading.remove>
        {{ $slot }}
    </span>
    <span class="hidden relative z-10 tracking-widest text-sm drop-shadow-[2px_2px_0_rgba(0,0,0,0.4)]" wire:loading.class.remove="hidden" wire:loading.class="block">
        ▋▋▋
    </span>
</button>
