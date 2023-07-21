<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('ptype');
            $table->string('ptype2');
            $table->string('areaname');
            $table->string('size');
            $table->string('sizeM');
            $table->string('price');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('name');
            $table->string('condition');
            $table->string('desc');
            $table->string('image');
            $table->string('user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('sectors')->nullable();
            $table->string('feature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
