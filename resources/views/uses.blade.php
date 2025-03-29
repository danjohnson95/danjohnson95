@extends('layout')

@section('content')

<x-content
    title="Uses"
>

<ol class="border-l my-6 border-zinc-100 pl-4 dark:border-zinc-800 space-y-6">
    <x-timeline-row
        detail="Hardware"
        title='MacBook Pro M2 Pro (2023), 14", 16GB RAM'
        description="I'm a big fan of the new M series chips - the performance is outstanding and the battery life is plenty. I love how it has a built-in HDMI port too."
    />

    <x-timeline-row
        detail=""
        title="NuPhy Halo65"
        description="The NuPhy Halo is a super high quality mechanical keyboard. I've paired it with Cherry MX Black switches and the wrist rest."
    />

    <x-timeline-row
        detail=""
        title="Apple Magic Mouse"
        description="An underrated feature of the Magic Mouse is the ability to easily swipe between desktops, and scroll horizontally."
    />

    <x-timeline-row
        detail=""
        title="Apple AirPods Pro"
        description="I love the noise cancellation feature on these. I regularly wear them without even listening to music, just to block out the noisy streets of London."
    />

    <x-timeline-row
        detail="Software"
        title="VSCode"
        description="Back at the start of my career I used Sublime Text, and then moved onto PHPStorm. Eventually, I settled on VSCode and I'll never look back. VSCode does everything I need and more."
    />

    <x-timeline-row
        detail=""
        title="Laravel Herd"
        description="Laravel Herd paired with the Pro license is a game changer for PHP development. I've never been a fan of installing various packages using Homebrew, and I love how Herd abstracts all of that."
    />

    <x-timeline-row
        detail=""
        title="Tinkerwell"
        description="I was quite late on the scene with Tinkerwell, but it's found its way into my daily workflow. I love how I can quickly test out code snippets and run database queries."
    />

    <x-timeline-row
        detail=""
        title="Figma"
        description="I've been using Figma for a few years now and I feel like I know the tools inside out. I love how I can quickly create wireframes and mockups."
    />

    <x-timeline-row
        detail=""
        title="Keynote"
        description="I use Apple's Keynote for all my presentations. I'll usually design the slides in Figma and then import the assets into Keynote."
    />
</ol>
</x-content>
@endsection