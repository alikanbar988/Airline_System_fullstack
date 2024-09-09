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
        Schema::create('flightmasters', function (Blueprint $table) {
            $table->id();
            $table->string('DepartureCity');
            $table->string('ArrivalCity');
            $table->string('DepartureTime')->nullable();
            $table->string('ArrivalTime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flightmasters');
    }
};
