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
        Schema::create('poolings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('depart');
            $table->string('destination');
            $table->datetime('time_depart');
            $table->integer('nb_place_max')->nullable();
            $table->integer('nb_place_available')->nullable();
            $table->float('longletude')->nullable();
            $table->float('latitude')->nullable();
            $table->bigInteger('price')->nullable();
            $table->enum('gender', ['male', 'female','any'])->nullable();
            $table->enum('bagage_size', ['small', 'medium','large'])->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poolings');
    }
};
