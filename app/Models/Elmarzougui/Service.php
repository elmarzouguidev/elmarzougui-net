<?php

declare(strict_types=1);

namespace App\Models\Elmarzougui;

use App\Models\Concerns\HasSlug;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use HasUuid;
    use HasSlug;

    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [];

    // Relationships

    // Helper Methods
}
