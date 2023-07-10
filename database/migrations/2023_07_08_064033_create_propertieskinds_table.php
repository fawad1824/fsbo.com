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
        Schema::create('propertieskinds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('is_heading')->nullable()->default(0);
            $table->string('headingname')->nullable()->default(0);
            $table->string('is_headingid')->nullable()->default(0);
            $table->string('is_propertykind')->nullable()->default(0);
            $table->string('is_propertyfeature')->nullable()->default(0);
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
        Schema::dropIfExists('propertieskinds');
    }
};
