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
        Schema::table('flighttransactions', function (Blueprint $table) {
            $table->unsignedBigInteger('cancellation_id')->nullable();
            $table->foreign('cancellation_id')->references('id')->on('cancellations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flighttransactions', function (Blueprint $table) {
            $table->dropForeign(['cancellation_id']);
            $table->dropColumn('cancellation_id');
        });
    }
};
