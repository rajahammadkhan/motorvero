<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('user_id')->nullable();
            $table->string('condition')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('zip')->nullable();
            $table->string('url')->nullable();
            $table->string('tracking')->nullable();
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
        Schema::dropIfExists('searches');
    }
}
