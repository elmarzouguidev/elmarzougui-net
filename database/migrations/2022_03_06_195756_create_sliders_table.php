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
        Schema::create('sliders', function (Blueprint $table) {

            $table->id();
            $table->uuid('uuid')->unique();

            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->string('button')->nullable();
            $table->string('image');

            $table->boolean('active')->default(true);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
