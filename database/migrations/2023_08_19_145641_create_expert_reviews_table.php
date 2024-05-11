<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('reviews_video')->nullable();
            $table->string('start_price')->nullable();
            $table->string('end_price')->nullable();
            $table->longText('pros')->nullable();
            $table->longText('cons')->nullable();
            $table->string('look_feel')->nullable();
            $table->string('technology')->nullable();
            $table->string('safety')->nullable();
            $table->string('form_function')->nullable();
            $table->string('cost')->nullable();
            $table->longText('expert_description')->nullable();
            $table->longText('look_and_feel_detail')->nullable();
            $table->longText('performance')->nullable();
            $table->longText('form_and_function_detail')->nullable();
            $table->longText('technology_detail')->nullable();
            $table->longText('safety_detail')->nullable();
            $table->longText('cost_effectiveness')->nullable();
            $table->string('price_range_start')->nullable();
            $table->string('price_range_end')->nullable();
            $table->string('avg_price_range_start')->nullable();
            $table->string('avg_price_range_end')->nullable();
            $table->string('yoy_price_start')->nullable();
            $table->string('yoy_price_end')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->integer('status')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->string('written_by')->nullable();
            $table->integer('admin_status')->nullable();
            $table->integer('user_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('expert_reviews');
    }
}
