<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('admin_status');
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('type')->nullable();
            $table->integer('category')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('press_rooms');
    }
}
