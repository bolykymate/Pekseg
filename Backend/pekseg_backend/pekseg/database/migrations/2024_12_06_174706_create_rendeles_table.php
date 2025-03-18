ő<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rendelesek', function (Blueprint $table) {
            $table->id();
            $table->foreignID('pekaru')->references('id')->on('pekaruk');
            $table->foreignID('felhasznalo')->references('id')->on('felhasznalok');
            $table->foreignID('cim')->references('id')->on('cimek');
            $table->string('szamlazasiNev');
            $table->date('RDatum')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('KDatum');
            $table->boolean('fizetesiMod');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendelesek');
    }
};
