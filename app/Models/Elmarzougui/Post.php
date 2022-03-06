<?php

declare(strict_types=1);

namespace App\Models\Elmarzougui;

use App\Models\Concerns\GetBySlug;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Post extends Model
{
    use HasFactory;
    use GetBySlug;

    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [];

    // Relationships


    public function getPhotoAttribute()
    {
        return Voyager::image($this->image);
    }

    public function getCreateAtFormatedAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);
        return $date->translatedFormat('d') . ' ' . $date->translatedFormat('F') . ' ' . $date->translatedFormat('Y');
    }

    public function getUrlAttribute()
    {
        return route('blog.single',$this->slug);
    }

    protected function shortDescription(): Attribute
    {
        return new Attribute(
            fn () => Str::limit($this->excerpt, 100, ' (...)'),
        );
    }
}

