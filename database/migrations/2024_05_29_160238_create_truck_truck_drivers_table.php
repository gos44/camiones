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
        Schema::create('truck_truck_drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            

            $table->unsignedBigInteger('trucks_id')->nullable();
            $table->unsignedBigInteger('truck_drivers_id')->nullable();

            $table->foreign('trucks_id')
            ->references('id')
            ->on('trucks')->onDelete('cascade');

            $table->foreign('truck_drivers_id')
            ->references('id')
            ->on('truck_drivers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_truck_drivers');
    }
};
