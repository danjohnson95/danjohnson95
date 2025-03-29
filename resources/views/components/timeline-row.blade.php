<li class="flex flex-col md:flex-row items-start">
    <div class="flex-shrink-0 w-[200px] text-zinc-400 dark:text-zinc-500 py-8">
        {{ $detail }}
    </div>
    <a href="{{ $url }}" class="flex flex-1 p-8 rounded-lg transition hover:bg-zinc-50 dark:hover:bg-zinc-800/50 flex-shrink-0 space-x-4">
        @if (!empty($image))
            <div class="flex-shrink-0">
                <img src="{{ $image }}" alt="{{ $title }}" class="rounded-sm w-24 h-24 object-cover object-center" />
            </div>
        @endif
        <div class="space-y-2 flex-1 flex-shrink-0">
            <div class="text-base font-mono font-semibold">{{ $title }}</div>
            <p class="text-zinc-600 dark:text-zinc-400">
                {{ $description }}
            </p>

            <p>
                @foreach ($tags as $tag)
                    <span class="bg-zinc-100 dark:bg-zinc-700 px-1 py-0.5 text-xs font-mono font-medium rounded-sm">{{ $tag }}</span>
                @endforeach
            </p>
        </div>
    </a>
</li>
