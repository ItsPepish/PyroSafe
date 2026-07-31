<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('publication_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_id')
                ->constrained('publications')
                ->cascadeOnDelete();
            $table->foreignId('image_id')
                ->constrained('images')
                ->restrictOnDelete();
            $table->unsignedInteger('position');
            $table->timestamps();
            $table->unique(['publication_id', 'image_id']);
            $table->unique(['publication_id', 'position']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('publication_images');
    }
};
