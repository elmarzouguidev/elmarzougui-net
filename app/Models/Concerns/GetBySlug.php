<?php
namespace App\Models\Concerns;

trait GetBySlug
{

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

