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
        Schema::create('_family_member_', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('gender');
            $table->string('age');
            $table->string('relation');
            $table->string('phone_number');
            $table->string('landOwner_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_family_member_');
    }
};
