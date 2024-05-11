<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_information', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('car_id');
            $table->unsignedInteger('dealer_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('area')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('request_information');
    }
}
