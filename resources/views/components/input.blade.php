@props(['label' => null, 'error' => null])

<div class="flex flex-col space-y-1 font-minecraft">
    @if ($label)
        <label class="text-[#D0D1D4] text-sm drop-shadow-[2px_2px_0_rgba(0,0,0,0.5)]">{{ $label }}</label>
    @endif
    
    <input {{ $attributes->merge(['class' => 'w-full px-3 py-2 bg-[#313233] border-[3px] border-[#1E1E1F] text-[#D0D1D4] shadow-[inset_0_4px_0_0_#242425] focus:outline-none focus:border-[#3C8527] transition-colors placeholder-[#68696B] ' . ($error ? 'border-[#dc3545]' : '')]) }} />
    
    @if ($error)
        <span class="text-[#dc3545] text-xs mt-1 drop-shadow-[1px_1px_0_rgba(0,0,0,0.8)]">{{ $error }}</span>
    @elseif ($attributes->has('wire:model'))
        @error($attributes->get('wire:model'))
            <span class="text-[#dc3545] text-xs mt-1 drop-shadow-[1px_1px_0_rgba(0,0,0,0.8)]">{{ $message }}</span>
        @enderror
    @endif
</div>
