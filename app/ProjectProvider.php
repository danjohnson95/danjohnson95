<?php

namespace App;

use App\Entities\Project;

class ProjectProvider extends Provider
{
    public function diskName(): string
    {
        return 'projects';
    }

    public function entity(): string
    {
        return Project::class;
    }
}