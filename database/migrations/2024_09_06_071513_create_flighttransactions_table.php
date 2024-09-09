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
        Schema::create('flighttransactions', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('passenger_id');
           $table->unsignedBigInteger('passenger_id'); 
            $table->string('seatnumber');
            $table->string('date');
            $table->string('fare');
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
          
           //  $table->foreignId('passenger_id')->constrained('passengers');
          // $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            $table->foreignId('flightmaster_id')->constrained('flightmasters');
            $table->foreignId('aircraft_id')->constrained('aircrafts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flighttransactions');
    }
};
