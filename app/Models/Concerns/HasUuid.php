<?php
namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

trait HasUuid
{

    public static function bootUuidGenerator(): void
    {
        static::creating(function (Model $model) {

            if (Schema::hasColumn($model->getTable(), 'uuid')) {

                $model->uuid = Str::uuid();
            }
        });
    }
}
