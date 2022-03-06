<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('post_tag', function (Blueprint $table) {

            $table->id();
            $table->foreignId('post_id')->index()->constrained();
            $table->foreignId('tag_id')->index()->constrained();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
