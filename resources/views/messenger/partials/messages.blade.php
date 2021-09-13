<div class="px-4 py-2 leading-relaxed border rounded-lg sm:px-6 sm:py-4">
    <span class="font-semibold">{{ $message->user->name }}</span>
    <span class="text-xs text-gray-400">{{ $message->created_at->diffForHumans() }}
    </span>
    <p class="text-sm">
        {{ $message->body }}
    </p>
</div>
