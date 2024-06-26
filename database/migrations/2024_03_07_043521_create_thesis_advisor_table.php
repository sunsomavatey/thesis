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
        Schema::create('thesis_advisor', function (Blueprint $table) {
            $table->string('Academic_year');
            $table->string('Advisor');
            $table->unique(['Academic_year', 'Advisor']);
            
            // $table->string('Academic_year')->primary();
            $table->integer('n');
            $table->string('College')->nullable();
            $table->string('Department')->nullable();
            // $table->string('Advisor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thesis_advisor');
    }
};
