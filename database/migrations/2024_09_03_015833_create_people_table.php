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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name_1');
            $table->string('name_2')->nullable();
            $table->string('surname_1');
            $table->string('surname_2')->nullable();
            $table->date('birth_date');
            $table->boolean('sex');
            $table->boolean('nationality');
            $table->string('id_number');
            $table->unsignedBigInteger('federal_state_id');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('parish_id');
            $table->string('address');
            $table->unsignedBigInteger('phone_area_code_id')->unsigned();
            $table->foreign('phone_area_code_id')->references('id')->on('phone_area_codes');
            $table->string('phone');
            $table->unsignedBigInteger('cell_phone_area_code_id')->unsigned();
            $table->foreign('cell_phone_area_code_id')->references('id')->on('cell_phone_area_codes');
            $table->string('cell_phone');
            $table->string('email');
            $table->string('profession');
            $table->string('institution');
            $table->integer('years_experience');


            $table->foreign('federal_state_id')->references('id')->on('federal_states');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->foreign('parish_id')->references('id')->on('parishes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
