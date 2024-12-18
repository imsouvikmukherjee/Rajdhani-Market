<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('markets', function (Blueprint $table) {
            $table->string('open_pana')->nullable()->after('status');        // Add result column
            $table->string('open_result')->nullable()->after('open_pana');        // Add open_result column
            $table->string('close_pana')->nullable()->after('open_result');    // Add close_pana column
            $table->string('close_result')->nullable()->after('close_pana');   // Add close_result column
        });
    }
    
    public function down()
    {
        Schema::table('markets', function (Blueprint $table) {
            $table->dropColumn(['open_pana', 'open_result', 'close_pana', 'close_result']); // Drop all added columns
        });
    }
    
};
