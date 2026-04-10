@props(['value'])

<li @click="selectItem('{{ $slot }}'); $dispatch('input', '{{ $value }}')" class="px-4 py-2 cursor-pointer hover:bg-[#48494A] hover:text-white transition-colors group flex items-center relative">
    <span class="absolute left-2 opacity-0 group-hover:opacity-100 transition-opacity text-[#3C8527] text-xs">▶</span>
    <span class="ml-4 drop-shadow-[2px_2px_0_rgba(0,0,0,0.8)] text-sm tracking-wide">{{ $slot }}</span>
</li>
