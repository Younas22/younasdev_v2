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
        Schema::create('stock_apps', function (Blueprint $table) {
            $table->id();
            $table->string('base_url')->unique();
            $table->string('admin_email')->nullable();
            $table->string('admin_password')->nullable();
            $table->string('close_url')->nullable();
            $table->string('open_url')->nullable();
            $table->timestamp('last_ping')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_apps');
    }
};
