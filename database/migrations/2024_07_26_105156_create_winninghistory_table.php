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
        Schema::create('winninghistory', function (Blueprint $table) {
            $table->id();
            $table->string('market');
            $table->string('date');
            $table->string('session');
            $table->string('open_pana');
            $table->string('open_result');
            $table->string('close_pana');
            $table->string('close_result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('winninghistory');
    }
};
