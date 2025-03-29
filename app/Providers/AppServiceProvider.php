<?php

namespace App\Providers;

use App\BlogProvider;
use App\ProjectProvider;
use App\TalkProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('blog', fn (string $slug) =>
            app(BlogProvider::class)->findBySlug($slug));

        Route::bind('talk', fn (string $slug) =>
            app(TalkProvider::class)->findBySlug($slug));

        Route::bind('project', fn (string $slug) =>
            app(ProjectProvider::class)->findBySlug($slug));
    }
}
