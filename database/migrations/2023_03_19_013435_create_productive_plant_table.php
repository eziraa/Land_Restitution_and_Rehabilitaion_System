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
        Schema::create('productive_plant', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('Lprice');
            $table->integer('Mprice');
            $table->integer('Hprice');
            $table->string('land_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productive_plant');
    }
};
