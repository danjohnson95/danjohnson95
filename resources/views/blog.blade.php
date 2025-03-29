@extends('layout')

@section('content')

<x-content title="Blog">
    <x-grid>
        @foreach ($blogs as $blog)
            {{ $blog->card() }}
        @endforeach
    </x-grid>
</x-content>

@endsection