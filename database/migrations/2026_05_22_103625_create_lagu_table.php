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
    if (!Schema::hasTable('lagu')) {
        Schema::create('lagu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->constrained('album')->onDelete('cascade');
            $table->foreignId('artis_id')->constrained('artis');
            $table->string('judul');
            $table->time('durasi')->nullable();
            $table->integer('track_number')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lagu');
    }
};
