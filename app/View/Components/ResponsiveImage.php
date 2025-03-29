<?php

namespace App\View\Components;

use App\Services\ImageResizeService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResponsiveImage extends Component
{
    public string $srcSet = '';
    public string $sizes = '';

    /**
     * Create a new component instance.
     */
    public function __construct(ImageResizeService $service, public ?string $src = null, public ?string $alt = null, public array $widths = [], array $sizes = [], public string $class = '')
    {
        if (! $this->shouldPerformResizing()) {
            return;
        }

        $images = $service->resize($src, $widths);

        $this->srcSet = collect($images)
            ->map(fn ($path, $width) => "{$path} {$width}w")
            ->join(', ');

        $this->sizes = collect($sizes)
            ->map(fn ($size, $key) => ($key ? "(max-width: {$key}px)" : "") . " {$size}vw")
            ->join(', ');
    }

    protected function shouldPerformResizing(): bool
    {
        return app()->isProduction();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.responsive-image', [
            'src' => $this->src,
            'alt' => $this->alt,
            'srcSet' => $this->srcSet,
            'sizes' => $this->sizes,
            'class' => $this->class,
        ]);
    }
}
