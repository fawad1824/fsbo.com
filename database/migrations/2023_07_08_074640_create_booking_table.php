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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('property_id');
            $table->string('user_id');
            $table->string('contactuser_id');
            $table->string('date');
            $table->string('time');
            $table->string('price');
            $table->string('phone');
            $table->string('email');
            $table->string('desciption');
            $table->string('status');
            $table->string('booking_id')->default(0);
            $table->string('appointment_id')->default(0);
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
        Schema::dropIfExists('booking');
    }
};
