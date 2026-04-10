@props(['text', 'subtext' => null])

<div x-data="{ tooltipVisible: false }" @mouseenter="tooltipVisible = true" @mouseleave="tooltipVisible = false" class="relative inline-block">
    {{ $slot }}
    
    <div x-cloak x-show="tooltipVisible"
         class="absolute z-50 bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#100010] border-2 border-[#1E0030] shadow-[0_0_0_1px_#1E0030,inset_0_0_0_2px_#5000C8,inset_0_4px_0_0_#6A00FF] font-minecraft rounded-sm pointer-events-none"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="text-white text-sm drop-shadow-[2px_2px_0_rgba(0,0,0,0.8)]">{{ $text }}</div>
        @if($subtext)
            <div class="text-[#A8A8A8] text-xs mt-1 drop-shadow-[2px_2px_0_rgba(0,0,0,0.8)]">{{ $subtext }}</div>
        @endif
    </div>
</div>
