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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('dob');
            $table->string('phone');
            $table->dateTime('upcomming_date');
            $table->dateTime('v1_date')->nullable();
            $table->dateTime('v2_date')->nullable();
            $table->string('unique_id');
            $table->unsignedBigInteger('diabates');
            $table->foreignId('vaccination_center');
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
        Schema::dropIfExists('registrations');
    }
};
