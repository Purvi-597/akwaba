<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_rating', function (Blueprint $table) {
            $table->id();
            $table->string('osm_id')->nullable();
            $table->string('title')->nullable();
            $table->string('user_id')->nullable();
            $table->integer('message')->nullable();
            $table->integer('ratings')->nullable();
            $table->text('image')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('reviews_rating');
    }
}
