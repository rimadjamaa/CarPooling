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
            $table->unsignedBigInteger('user_id');
            $table->string('depart');
            $table->string('destination');
            $table->date('time_depart');
            $table->integer('nb_place_max');
            $table->integer('nb_place_available');
            $table->float('longletude');
            $table->float('latitude');
            $table->integer('price');
            $table->enum('gender', ['homme', 'femme','peu importe'])->nullable();
            $table->integer('bagage_size');
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
