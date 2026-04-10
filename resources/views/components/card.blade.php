@props(['title' => null])

<div {{ $attributes->merge(['class' => 'bg-[#C6C6C6] border-[3px] border-[#1E1E1F] p-1 font-minecraft drop-shadow-[2px_2px_0_rgba(0,0,0,0.5)]']) }}>
    <div class="h-full border-t-[3px] border-l-[3px] border-white/70 border-b-[3px] border-r-[3px] border-[#555555]/80 p-4 shadow-[inset_0_0_0_2px_#C6C6C6]">
        @if ($title)
            <div class="font-minecraft text-lg mb-4 text-[#3F3F3F]">
                {{ $title }}
            </div>
        @endif
        <div class="text-sm text-[#3F3F3F]">
            {{ $slot }}
        </div>
    </div>
</div>
