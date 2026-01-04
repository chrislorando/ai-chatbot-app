<div class="bg-[#0C0C0C] border border-[#333] shadow-2xl rounded-md flex flex-col h-full overflow-hidden">
    <div class="bg-[#2D2D2D] px-4 py-1.5 flex items-center justify-between text-xs text-gray-300">
        <span>Terminal</span>
        <div class="flex gap-2">
            <span class="w-3 h-3 bg-gray-600 rounded-full"></span>
            <span class="w-3 h-3 bg-gray-600 rounded-full"></span>
            <span class="w-3 h-3 bg-red-600 rounded-full"></span>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto p-4 text-sm text-[#CCCCCC] leading-relaxed custom-scrollbar">
        <p class="mb-4 text-gray-500">Laravel Livewire [Streamed Response]</p>

        @foreach($messages as $msg)
            <div class="mb-3">
                @if($msg['role'] === 'user')
                    <span class="text-[#00FF00] font-bold">YOU:</span> {{ $msg['content'] }}
                @else
                    <div class="flex gap-2">
                        <span class="text-[#00FF00] font-bold">RESPONSE:</span>
                        <div>{{ $msg['content'] }}</div>
                    </div>
                @endif
            </div>
        @endforeach
        
        @if($answer !== '' || (count($messages) > 0 && end($messages)['role'] === 'user'))
            <div class="mb-4 flex gap-2 ">
                <span class="text-[#00FF00] font-bold">RESPONSE:</span>
                <div wire:stream="answer" class="whitespace-pre-wrap">{{ $answer }}</div>
            </div>
        @endif
    </div>

    <form wire:submit="submitPrompt" class="p-4 border-t border-[#333] flex items-center bg-[#0C0C0C]">
        <input 
            wire:model="prompt" 
            type="text" 
            class="flex-1 bg-transparent outline-none text-[#CCCCCC] caret-blue-500"
            autofocus
            placeholder="Type here..."
        >
    </form>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0C0C0C; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }
    </style>
</div>