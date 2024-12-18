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
        Schema::create('full_sangam', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('session')->nullable();
            $table->string('open_pana');
            $table->string('close_pana');
            $table->string('points')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('full_sangam');
    }
};
