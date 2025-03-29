@props([
    'imageSrc' => null,
    'imageAlt' => null,
    'title' => null,
    'time' => null,
    'subtitle' => null,
    'url' => null,
])

<a href="{{ $url }}" class="h-full">
    <article class="hover:bg-stone-50 dark:hover:bg-gray-800 p-4 rounded-xl group transition-colors">
        <div class="aspect-3/2 transition-shadow duration-300 group-hover:shadow-md">
            @if ($imageSrc)
                <x-responsive-image
                    class="border-3 dark:border-gray-700 outline-1 outline-border border-gray-100  object-cover object-center w-full h-full rounded"
                    src="{{ $imageSrc }}"
                    alt="{{ $imageAlt }}"
                    :widths="[341, 682, 1023, 512, 1024, 1536, 2048, 3072]"
                    :sizes="[
                        640 => 100,
                        768 => 50,
                        1024 => 33,
                        null => 33,
                    ]"
                />
            @endif
        </div>
        <div class="py-4 space-y-1 flex flex-col justify-between h-full">
            @if ($time)
                <time datetime="" class="text-gray-500 text-xs font-mono">{{ $time }}</time>
            @endif

            <h3 class="text-xl font-medium tracking-tight line-clamp-1" title="{{  $title }}">{{ $title }}</h3>

            @if ($subtitle)
                <p class="text-gray-500 line-clamp-2">{!! $subtitle !!}</p>
            @endif

            @if (!empty($tags))
                <div class="flex flex-wrap gap-3">
                    @foreach ($tags as $tag)
                        <x-tag>{{ $tag }}</x-tag>
                    @endforeach
                </div>
            @endif

        </div>
    </article>
</a>