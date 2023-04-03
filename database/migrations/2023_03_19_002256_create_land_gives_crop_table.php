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
        Schema::create('land_gives_crop', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('this');
            $table->integer('last');
            $table->integer('two');
            $table->string('land_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_gives_crop');
    }
};
