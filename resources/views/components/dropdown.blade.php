@props(['label' => 'Select'])

<div x-data="{ open: false, selected: null, selectItem(val) { this.selected = val; this.open = false; } }" class="relative inline-block w-64 font-minecraft text-[#D0D1D4]">
    <button @click="open = !open" @click.away="open = false" type="button" class="w-full text-left px-4 py-3 bg-[#313233] border-[3px] border-[#1E1E1F] flex justify-between items-center hover:bg-[#48494A] transition-colors focus:border-[#3C8527] focus:outline-none">
        <span x-text="selected ? selected : '{{ $label }}'" class="drop-shadow-[2px_2px_0_rgba(0,0,0,0.8)] text-sm whitespace-nowrap overflow-hidden"></span>
        <svg class="w-4 h-4 text-[#D0D1D4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="absolute z-50 w-full mt-1 bg-[#313233] border-[3px] border-[#1E1E1F] shadow-lg"
         style="display: none;">
        <ul class="py-1 max-h-60 overflow-auto">
            {{ $slot }}
        </ul>
    </div>
</div>
