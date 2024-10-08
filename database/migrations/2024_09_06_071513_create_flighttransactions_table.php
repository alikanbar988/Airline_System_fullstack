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
            $table->unsignedBigInteger('passenger_id'); 
        //    $table->unsignedBigInteger('cancellation_id');
            $table->string('seatnumber');
            $table->string('date');
            $table->string('fare'); 
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
          //  $table->foreign('cancellation_id')->references('id')->on('cancellations')->onDelete('cascade');
          // $table->foreignId('cancellation_id')->constrained('cancellations');
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
