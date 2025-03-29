@extends('layout')

@section('content')

<x-content title="Projects">
    <x-grid>
        @foreach ($projects as $project)
            {{ $project->card() }}
        @endforeach
    </x-grid>
</x-content>

@endsection
