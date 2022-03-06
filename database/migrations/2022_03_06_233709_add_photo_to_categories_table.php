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
        Schema::table('categories', function (Blueprint $table) {
           $table->string('image')->nullable()->after('slug');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
           $table->dropColumn('image');
        });
    }
};
