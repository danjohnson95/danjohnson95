<?php

namespace App\View\Components;

use App\Services\StarService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GitHubMetadata extends Component
{
    public int $stars;

    /**
     * Create a new component instance.
     */
    public function __construct(StarService $service, public string $repo)
    {
        $this->stars = $service->stars($repo);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.github-metadata', [
            'stars' => $this->stars,
            'repo' => $this->repo,
        ]);
    }
}
