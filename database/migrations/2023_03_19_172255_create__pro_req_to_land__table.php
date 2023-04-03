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
        Schema::create('_pro_req_to_land_', function (Blueprint $table) {
            $table->id();
            $table->string('responsibility');
            $table->string('urgency');
            $table->string('recover');
            $table->integer('duration');
            $table->integer('area');
            $table->string('project');
            $table->string('sub_kebele');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pro_req_to_land_');
    }
};
