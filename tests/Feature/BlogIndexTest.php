<?php

it('returns a successful response', function () {
    $response = $this->get(route('blog.index'));

    $response->assertStatus(200);
});
