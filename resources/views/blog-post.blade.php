@extends('layout')

@section('head')
    {!!  $blog->schema() !!}
@endsection

@section('content')
    <div class="flex items-center justify-center my-8">
        <a href="{{ route('blog.index', [], false) }}">
            <x-tag>Blog</x-tag>
        </a>
    </div>

    <x-content title="{{ $blog->content->matter('title') }}" summary="{{ $blog->content->matter('summary') }}"
        time="{{ $blog->date->isoFormat('LLLL') }}" image="{{ $blog->content->matter('image') }}"
        markdown="{!! $blog->content->body() !!}">
    </x-content>
@endsection
