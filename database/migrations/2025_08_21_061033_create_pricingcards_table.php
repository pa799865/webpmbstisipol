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
        Schema::create('pricingcards', function (Blueprint $table) {
            $table->id();
            $table->string('badge');
            $table->string('title');
            $table->text('description');
            $table->string('price');
            $table->string('period');
            $table->string('special');
            $table->string('special2');
            $table->string('special3');
            $table->string('special4');
            $table->string('special5');
            $table->string('special6');
            $table->string('tipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricingcards');
    }
};
