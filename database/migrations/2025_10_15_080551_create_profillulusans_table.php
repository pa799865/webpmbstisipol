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
        Schema::create('profillulusans', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('list1');
            $table->text('list2')->nullable();
            $table->text('list3')->nullable();
            $table->text('list4')->nullable();
            $table->text('list5')->nullable();
            $table->text('list6')->nullable();
            $table->text('list7')->nullable();
            $table->text('list8')->nullable();
            $table->text('list9')->nullable();
            $table->text('list10')->nullable();
            $table->text('img');
            $table->text('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profillulusans');
    }
};
