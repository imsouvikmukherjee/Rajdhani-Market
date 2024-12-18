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
        Schema::create('half_sangam', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('Session')->nullable();
            $table->string('open_digits');
            $table->string('close_digits');
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
        Schema::dropIfExists('half_sangam');
    }
};
