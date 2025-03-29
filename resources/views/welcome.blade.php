@extends('layout')

@section('head')
    {!!  config('app.me') !!}
@endsection

@section('content')

<div class="space-y-32">
    <section class="text-center space-y-8 max-w-lg mx-auto">
        <x-responsive-image
            src="/images/me.png"
            alt="A portrait of Dan"
            class="rounded-full w-18 h-18 mx-auto border-4 box-content border-white dark:border-gray-700 outline-1 outline-border shadow-xs"
            :widths="[72, 144, 216]"
            :sizes="[null => 72]"
        />

        <h1 class="text-5xl font-bold">Hi, I'm Dan!</h1>
        <h2 class="text-xl font-normal text-gray-500 leading-relaxed">
            I'm a full stack engineer with over 12 years commercial experience in building large-scale applications and leading development teams.
        </h2>

        <x-socials/>
    </section>

    <div class="space-y-32 divide-y divide-dashed divide-border">
        <x-home-section
            title="Projects"
            href="{{ route('project.index') }}"
            :entities="$projects"
        />

        <x-home-section
            title="Talks"
            href="{{ route('talk.index') }}"
            :entities="$talks"
        />

        <x-home-section
            title="Blog"
            href="{{ route('blog.index') }}"
            :entities="$blogs"
        />
    </div>
</div>
@endsection