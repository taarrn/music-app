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
    if (!Schema::hasTable('artis')) {
        Schema::create('artis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('genre');
            $table->string('negara');
            $table->timestamp('created_at')->nullable();
        });
    }
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artis');
    }
};
