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
        Schema::create('land', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('use');
            $table->integer('area');
            $table->integer('landOwner_id');
           // $table->string('photo');
            $table->string('sub_kebele');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land');
    }
};
