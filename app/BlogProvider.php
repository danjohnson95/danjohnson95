<?php

namespace App;

use App\Entities\Blog;

class BlogProvider extends Provider
{
    public function diskName(): string
    {
        return 'blog_posts';
    }

    public function entity(): string
    {
        return Blog::class;
    }
}