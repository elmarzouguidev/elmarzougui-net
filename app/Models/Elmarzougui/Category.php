<?php

declare(strict_types=1);

namespace App\Models\Elmarzougui;

use App\Models\Concerns\GetBySlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use TCG\Voyager\Facades\Voyager;

class Category extends Model
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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

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
        return route('categories.single',$this->slug);
    }
}
