<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('image_report', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')
                ->constrained('reports')
                ->cascadeOnDelete();
            $table->foreignId('image_id')
                ->constrained('images')
                ->restrictOnDelete();
            $table->timestamps();
            $table->unique(['report_id', 'image_id']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('image_report');
    }
};
