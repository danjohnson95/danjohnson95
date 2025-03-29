@extends('layout')

@section('content')
    <div class="flex items-center justify-center my-8">
        <a href="{{ route('talk.index') }}">
            <x-tag>Talks</x-tag>
        </a>
    </div>

    <x-content
        title="{{ $talk->content->matter('title') }}"
        summary="{{ $talk->content->matter('venueName') }}{{ ' · ' }}{{ $talk->content->matter('venueLocation') }}"
        image="{{  $talk->content->matter('image') }}"
        time="{{ $talk->date->isoFormat('LL') }}"
    >
        <x-markdown>
            {!! $talk->content->body() !!}
        </x-markdown>
    </x-content>
@endsection

