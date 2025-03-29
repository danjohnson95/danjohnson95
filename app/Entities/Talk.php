<?php

namespace App\Entities;

class Talk extends Entity
{
    public function card()
    {
        return view('components.card', [
            'url' => route('talk.show', $this->slug(), false),
            'title' => $this->content->matter('title'),
            'imageSrc' => $this->content->matter('image'),
            'time' => $this->date->isoFormat('LL'),
            'subtitle' => $this->content->matter('venueName'),
        ]);
    }
}
