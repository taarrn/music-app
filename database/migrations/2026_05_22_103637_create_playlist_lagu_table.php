<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
    if (!Schema::hasTable('playlist_lagu')) {
        Schema::create('playlist_lagu', function (Blueprint $table) {
            $table->foreignId('playlist_id')->constrained('playlist')->onDelete('cascade');
            $table->foreignId('lagu_id')->constrained('lagu')->onDelete('cascade');
            $table->integer('urutan')->nullable();
            $table->primary(['playlist_id', 'lagu_id']);
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_lagu');
    }
};
