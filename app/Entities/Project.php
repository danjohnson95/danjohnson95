<?php

namespace App\Entities;

use App\View\Components\GitHubMetadata;
use Illuminate\Support\HtmlString;
use Spatie\SchemaOrg\Schema;

class Project extends Entity
{
    protected function gitHubRepo(): ?string
    {
        return $this->content->matter('githubRepository');
    }

    protected function getSubtitle()
    {
        if ($repo = $this->content->matter('githubRepository')) {
            return GitHubMetadata::resolve([
                'repo' => $repo,
            ])->render();
        }

        if ($this->content->matter('appId')) {
            return view('components.ios-metadata', [
                'name' => $this->content->matter('title'),
            ]);
        }

        return null;
    }

    public function card()
    {
        return view('components.card', [
            'url' => route('project.show', $this->slug(), false),
            'title' => $this->content->matter('title'),
            'imageSrc' => $this->content->matter('imageUrl'),
            'subtitle' => $this->getSubtitle(),
        ]);
    }

    public function schema()
    {
        return Schema::project()
            ->headline($this->content->matter('title'))
            ->articleBody($this->content->body())
            ->dateCreated($this->date?->toIso8601String())
            ->datePublished($this->date?->toIso8601String())
            ->image($this->content->matter('image'))
            ->author(config('app.me'));
    }
}
