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
        Schema::create('_team_rehabilitates_on', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('land_owner_id');
            $table->float('budget');
            $table->string('expert');
            $table->string('responsibility');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_team_rehabilitates_on');
    }
};
