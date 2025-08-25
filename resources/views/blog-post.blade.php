@extends('layout')

@section('head')
    {!!  $blog->schema() !!}

    <meta name="twitter:title" content="{{ $blog->content->matter('title') }}">
    <meta name="twitter:description" content="{{ $blog->content->matter('summary') }}">
    <meta name="twitter:image" content="{{ url($blog->content->matter('image')) }}">

    <meta property="og:title" content="{{ $blog->content->matter('title') }}">
    <meta property="og:description" content="{{ $blog->content->matter('summary') }}">
    <meta property="og:image" content="{{ url($blog->content->matter('image')) }}">
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
