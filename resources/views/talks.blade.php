@extends('layout')

@section('content')
    <x-content title="Talks">
        <x-grid>
            @foreach ($talks as $talk)
                {{ $talk->card() }}
            @endforeach
        </x-grid>
    </x-content>
@endsection
