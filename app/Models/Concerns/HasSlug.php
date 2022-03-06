<?php

namespace App\Models\Concerns;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait HasSlug
{

    public static function bootUuidGenerator(): void
    {
        static::creating(function (Model $model) {

            if (Schema::hasColumn($model->getTable(), 'slug')) {

                $model->slug = Str::slug($model->name);
            }
        });
    }
}
