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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->boolean("permission_1")->default(0);
            $table->boolean("permission_2")->default(0);
            $table->boolean("permission_3")->default(0);
            $table->boolean("permission_4")->default(0);
            $table->boolean("permission_5")->default(0);
            $table->boolean("permission_6")->default(0);
            $table->boolean("permission_7")->default(0);
            $table->boolean("permission_8")->default(0);
            $table->boolean("permission_9")->default(0);
            $table->boolean("permission_10")->default(0);
            $table->boolean("permission_11")->default(0);
            $table->boolean("permission_12")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
