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
        Schema::create('programstudycontents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('list1')->nullable();
            $table->string('list2')->nullable();
            $table->string('list3')->nullable();
            $table->string('list4')->nullable();
            $table->string('img');
            $table->timestamps();
            $table->string('img2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programstudycontents');
    }
};
