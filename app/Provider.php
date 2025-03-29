<?php

namespace App;

use App\Entities\Entity;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

abstract class Provider
{
    protected Filesystem $disk;

    /**
     * @var Collection<Entity>
     */
    protected Collection $items;

    abstract public function diskName(): string;
    abstract public function entity(): string;

    protected static string $sortKey = 'date';

    public function __construct()
    {
        $this->items = collect();
        $this->disk = Storage::disk($this->diskName());

        foreach ($this->disk->allFiles() as $file) {
            $this
                ->items
                ->push(
                    $this->entity()::makeFromFile(
                        $this->disk->path($file)
                    )
                );
        }
    }

    public function all(): Collection
    {
        return $this
            ->items
            ->sortBy(self::$sortKey)
            ->reverse();
    }

    public function paginate(int $page = 1): LengthAwarePaginator
    {
        return new LengthAwarePaginator(
            $this->all(),
            $this->items->count(),
            10,
            $page,
        );
    }

    public function findBySlug(string $slug): ?Entity
    {
        return $this
            ->items
            ->first(
                fn ($item) => $item->slug() === $slug
            );
    }
}