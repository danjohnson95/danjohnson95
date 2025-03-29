@extends('layout')

@section('head')
    {!!  $project->schema() !!}
@endsection

@section('content')
    <div class="flex items-center justify-center my-8">
        <a href="{{ route('project.index') }}">
            <x-tag>Projects</x-tag>
        </a>
    </div>
    <x-content
        title="{{ $project->content->matter('title') }}"
        summary="{{ $project->content->matter('summary') }}"
        image="{{ $project->content->matter('imageUrl') }}"
        markdown="{!! $project->content->body() !!}"
    />
@endsection