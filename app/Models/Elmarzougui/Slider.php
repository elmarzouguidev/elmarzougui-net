<?php

declare(strict_types=1);

namespace App\Models\Elmarzougui;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    use HasUuid;
    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'button',
        'image',
        'active'
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'active'=>'boolean'
    ];

    // Relationships

    // Helper Methods
}
