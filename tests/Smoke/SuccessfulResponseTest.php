<?php

it('returns a successful response', function (string $route) {
    $this->get($route)->assertStatus(200);
})->with([
    '/',
    '/blog',
    '/projects',
    '/talks',
    '/uses',
]);


it('returns a 404 when a route doesn\'t exist', function () {
    $this->get('/lol/not-real')->assertNotFound();
});