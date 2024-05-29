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
        Schema::create('truck_drivers', function (Blueprint $table) {
            $table->id();
            $table->integer('DNI');
            $table->string('name');
            $table->string('population');
            $table->integer('num_tele');
            $table->string('address');
            $table->integer('salary');
            
            $table->unsignedBigInteger('packages_id')->nullable();
            $table->foreign('packages_id')
                ->references('id')
                ->on('packages')->onDelete('set null');
            $table->timestamps();


    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_drivers');
    }
};
