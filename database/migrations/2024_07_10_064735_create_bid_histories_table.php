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
        Schema::create('bid_histories', function (Blueprint $table) {
            $table->id();
            $table->string('marketname');
            $table->string('gamename');
            $table->integer('digit');
            $table->decimal('amount', 8, 2);
            $table->date('date');
            $table->string('session')->default(0);
            $table->string('username');
            $table->string('contact');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid_histories');
    }
};
