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
        Schema::create('suc_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('website');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suc_tbl');
    }
};
