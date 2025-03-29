<?php

it('contains the introduction', function () {
    $this
        ->get(route('home'))
        ->assertSee("Hi, I'm Dan!", escape: false)
        ->assertSee("I'm a full stack engineer with over 12 years commercial experience in building large-scale applications and leading development teams.", escape: false);
});

it('contains three projects', function () {
    $this
        ->get(route('home'))
        ->assertSee('Projects');
});
