<?php

use App\BlogProvider;
use App\Entities\Blog;
use App\Entities\Project;
use App\Entities\Talk;
use App\ProjectProvider;
use App\TalkProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (BlogProvider $blogProvider, ProjectProvider $projectProvider, TalkProvider $talkProvider) =>
    view('welcome', [
        'blogs' => $blogProvider->all()->take(3),
        'projects' => $projectProvider->all()->take(3),
        'talks' => $talkProvider->all()->take(3),
    ])
)->name('home');

Route::get('/blog', fn (BlogProvider $blogProvider) => view('blog', [
    'blogs' => $blogProvider->paginate(),
]))->name('blog.index');

Route::get('/blog/{blog}', fn (Blog $blog) =>
    view('blog-post', compact('blog')))->name('blog.show');

Route::get('/projects', fn (ProjectProvider $projectProvider) => view('projects', [
    'projects' => $projectProvider->paginate(),
]))->name('project.index');

Route::get('/projects/{project}', fn (Project $project) =>
    view('project', compact('project')))->name('project.show');

Route::get('/talks', fn (TalkProvider $talkProvider) => view('talks', [
    'talks' => $talkProvider->paginate(),
]))->name('talk.index');

Route::get('/talks/{talk}', fn (Talk $talk) =>
    view('talk', compact('talk')))->name('talk.show');

Route::get('/uses', fn () => view('uses'))->name('use.index');
