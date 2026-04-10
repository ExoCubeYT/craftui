<div {{ $attributes->merge(['class' => 'py-4 flex flex-col items-center justify-center gap-1']) }}>
    @if($level !== null)
        <div class="text-[#80FF20] font-minecraft text-xl leading-none" style="text-shadow: 2px 2px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 0px 2px 0 #000, 2px 0px 0 #000, 0px -2px 0 #000, -2px 0px 0 #000;">
            {{ $level }}
        </div>
    @endif
    <div class="w-full max-w-[364px] h-[14px] border-[2px] border-black bg-[#1c2919] relative flex">
        <!-- Progress Fill -->
        <div class="h-full bg-gradient-to-b from-[#8efa3c] via-[#5DDF00] to-[#257300] relative z-0 transition-all duration-300" style="width: {{ $value }}%;">
            <div class="absolute top-0 left-0 right-0 h-[2px] bg-white/30"></div>
        </div>
        
        <!-- Grid Overlays (18 Segments = 17 Dividers) -->
        <div class="absolute inset-0 flex z-10">
            @for ($i = 0; $i < 17; $i++)
                <div class="flex-1 border-r-[2px] border-[#000000]/90 mix-blend-overlay"></div>
            @endfor
            <div class="flex-1"></div> <!-- Final segment, no right border -->
        </div>
    </div>
</div>
