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
        Schema::create('withdraw', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('balance');
            $table->string('amount');
            $table->string('account');
            $table->string('date');
            $table->string('approval_date')->nullable();
            $table->string('approval_time')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw');
    }
};