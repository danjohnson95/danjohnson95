@props([
    'title' => null,
    'entities' => [],
    'href' => null,
])

<section>
    <div class="flex items-center justify-center my-8">
        <a href="{{ $href }}">
            <h2 class="text-2xl font-semibold text-center">
                {{ $title }}
            </h2>
            {{-- <x-tag>{{ $title }}</x-tag> --}}
        </a>
    </div>

    <x-grid>
        @foreach ($entities as $entity)
            {{ $entity->card() }}
        @endforeach
    </x-grid>

    <div class="flex items-center justify-center my-8">
        <x-see-more href="{{ $href }}"/>
    </div>
</section>