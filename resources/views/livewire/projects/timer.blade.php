<div class="flex items-center justify-between mt-4 text-[14px]" wire:poll.1s>
    <div class="text-[#8C8C9A]  leading-6">Encerra em:</div>
    <div class="font-bold flex items-center space-x-1">
        <span class="text-white ">{{ $days }}</span><span>dias </span>
        <span class="text-white ">{{ $hours }}h</span><span>:</span>
        <span class="text-white ">{{ $minutes }}m</span><span>:</span>
        <span class="text-white ">{{ $seconds }}s</span>
    </div>
</div>
