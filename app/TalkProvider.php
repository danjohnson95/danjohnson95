<?php

namespace App;

use App\Entities\Talk;

class TalkProvider extends Provider
{
    public function diskName(): string
    {
        return 'talks';
    }

    public function entity(): string
    {
        return Talk::class;
    }
}
