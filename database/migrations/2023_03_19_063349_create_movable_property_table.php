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
        Schema::create('movable_property', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('uprooting');
            $table->integer('transport');
            $table->integer('installing');
            $table->integer('recovery');
            $table->string('land_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movable_property');
    }
};
