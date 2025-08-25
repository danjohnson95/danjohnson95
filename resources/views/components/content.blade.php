@props([
    'title' => null,
    'summary' => null,
    'time' => null,
    'image' => null,
    'imageAlt' => null,
    'markdown' => null,
])

<div>
    <div class="space-y-4 text-center">
        <h1 class="text-5xl font-bold">{{ $title }}</h1>

        @if ($summary)
            <h2 class="text-xl font-normal text-gray-500 leading-relaxed">
                {{ $summary }}
            </h2>
        @endif

        @if ($time)
            <div class="text-gray-500">
                <time>{{ $time }}</time>
            </div>
        @endif
    </div>

    <hr class="border-gray-100 dark:border-zinc-800 my-8" />

    @if ($image)
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="rounded max-h-[400px] w-full object-cover object-center" />
    @endif

    @if ($markdown)
        <article class="py-4 max-w-3xl mx-auto space-y-4">
            <div class="prose dark:prose-invert prose-code:before:content-none prose-code:after:content-none prose-code:rounded">
            {{-- <div class="prose prose-headings:before:content-[yo] prose-blockquote:border dark:prose-blockquote:border-gray-500 prose-blockquote:border-gray-300 prose-blockquote:rounded-lg prose-code:before:content-none prose-code:after:content-none prose-code:bg-gray-200 prose-code:px-2 prose-code:py-1 prose-code:rounded dark:prose-code:bg-gray-700 dark:prose-invert mx-auto max-w-3xl"> --}}
                <x-markdown>
                    {!! $markdown !!}
                </x-markdown>
            </div>
        </article>
    @endif

    {{ $slot }}
</div>
