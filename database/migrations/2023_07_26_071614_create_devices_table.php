<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->unsignedInteger('price_per_hour')->nullable();
            $table->unsignedInteger('price_per_day')->nullable();
            $table->unsignedInteger('price_per_client')->nullable();
            $table->unsignedInteger('price_per_case')->nullable();
            $table->enum('status', ['broken', 'intact', 'repair']);
            $table->enum('position', ['route', 'inventory', 'client']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
