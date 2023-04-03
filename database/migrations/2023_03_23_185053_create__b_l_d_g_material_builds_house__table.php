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
        Schema::create('_b_l_d_g_material_builds_house_', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("quantity");
            $table->integer("house_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_b_l_d_g_material_builds_house_');
    }
};
