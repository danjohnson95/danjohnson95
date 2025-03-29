<?php

use App\BlogProvider;
use App\ProjectProvider;
use App\Services\ImageResizeService;
use App\Services\StarService;
use App\TalkProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withSingletons([
        BlogProvider::class,
        TalkProvider::class,
        ProjectProvider::class,
        StarService::class,
        ImageResizeService::class,
    ])
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
