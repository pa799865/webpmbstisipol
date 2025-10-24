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
        Schema::create('konsentrasis', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('akreditasi');
            $table->text('konsentrasi1');
            $table->text('konsentrasi2')->nullable();
            $table->text('konsentrasi3')->nullable();
            $table->text('konsentrasi4')->nullable();
            $table->text('konsentrasi5')->nullable();
            $table->string('background_card')->default('-light')->nullable();
            $table->text('background_akreditasi')->nullable();
            $table->text('background_konsentrasi')->nullable();
            $table->text('background_akreditasi2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsentrasis');
    }
};
