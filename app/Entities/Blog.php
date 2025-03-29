<?php

namespace App\Entities;

use Spatie\SchemaOrg\Schema;

class Blog extends Entity
{
    public function tags()
    {
        return $this->content->matter('tags') ?? [];
    }

    public function card()
    {
        return view('components.card', [
            'url' => route('blog.show', $this->slug()),
            'title' => $this->content->matter('title'),
            'imageSrc' => $this->content->matter('image'),
            'time' => $this->date?->isoFormat('LL'),
            'tags' => $this->tags(),
        ]);
    }

    public function schema()
    {
        return Schema::blogPosting()
            ->headline($this->content->matter('title'))
            ->articleBody($this->content->body())
            ->dateCreated($this->date?->toIso8601String())
            ->datePublished($this->date?->toIso8601String())
            ->image($this->content->matter('image'))
            ->author(config('app.me'));
    }
}
