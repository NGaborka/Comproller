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
        if (!Schema::hasTable('dolgozok')) {
            Schema::create('dolgozok', function (Blueprint $table) {
                $table->id('DolgozoID');
                $table->string('Nev');
                $table->string('Email');
                $table->string('Telefonszam');
                $table->string('Munkakor');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dolgozos');
    }
};
