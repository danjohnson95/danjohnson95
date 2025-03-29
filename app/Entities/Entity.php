<?php

namespace App\Entities;

use Illuminate\Support\Carbon;
use Spatie\YamlFrontMatter\Document;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

abstract class Entity
{
    public ?Carbon $date;

    public function __construct(
        public Document $content
    )
    {
        $this->date = $this->content->matter('date') ? Carbon::parse($this->content->matter('date')) : null;
    }

    public static function make(
        Document $content
    ): static
    {
        return new static($content);
    }

    public static function makeFromFile(string $pathname): static
    {
        $content = YamlFrontMatter::parseFile($pathname);

        return new static($content);
    }

    public function slug(): string
    {
        return Str::slug($this->content->matter('title'));
    }
}