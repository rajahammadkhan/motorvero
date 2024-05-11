<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_dealers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('about_car')->nullable();
            $table->string('zip')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longtext('comments')->nullable();
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
        Schema::dropIfExists('contact_dealers');
    }
}
