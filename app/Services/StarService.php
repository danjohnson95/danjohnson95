<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class StarService
{
    protected const BASE_URL = 'https://api.github.com/repos/';

    public function stars(string $repository): int
    {
        $key = 'stars_' . $repository;

        return cache()->rememberForever($key, fn () =>
            Http::asJson()
                ->withToken(config('services.github.token'))
                ->get(self::BASE_URL . $repository)
                ->json('watchers_count')
        );
    }
}
