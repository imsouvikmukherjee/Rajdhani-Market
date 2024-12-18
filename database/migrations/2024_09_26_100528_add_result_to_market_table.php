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
            $table->string('result')->nullable()->after('status'); // Replace 'column_name' with the column after which you want to add 'result'
        });
    }
    
    public function down()
    {
        Schema::table('markets', function (Blueprint $table) {
            $table->dropColumn('result');
        });
    }
    
};
