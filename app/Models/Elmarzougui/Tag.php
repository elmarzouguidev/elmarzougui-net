<?php

declare(strict_types=1);

namespace App\Models\Elmarzougui;

use App\Models\Concerns\GetBySlug;
use App\Models\Concerns\HasSlug;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use HasUuid;
    use HasSlug;
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
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }

    // Helper Methods
}
