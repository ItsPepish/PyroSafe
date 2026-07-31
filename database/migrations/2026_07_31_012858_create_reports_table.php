<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique();
            $table->enum('type', ['clandestine_workshop', 'irregular_storage', 'unauthorized_sale', 'risk_situation']);
            $table->text('description');
            $table->enum('urgency', ['low', 'medium', 'high']);
            $table->string('address_reference');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->enum('status', ['pending', 'under_review', 'attended', 'discarded'])->default('pending');
            $table->ipAddress('ip_address');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reports');
    }
};
