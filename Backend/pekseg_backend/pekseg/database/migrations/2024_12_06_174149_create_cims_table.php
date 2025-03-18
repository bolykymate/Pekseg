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
        Schema::create('cimek', function (Blueprint $table) {
            $table->id();
            $table->foreignID('felhasznalo')->references('id')->on('felhasznalok');
            $table->string('cim')->unique();
            $table->string('telSzam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cimek');
    }
};
