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
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('make_id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('status')->default(0);
            $table->foreign('make_id')->references('id')->on('makes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
