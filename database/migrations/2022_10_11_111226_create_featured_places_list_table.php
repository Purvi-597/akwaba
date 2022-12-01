<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedPlacesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_places_list', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_fr');
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->text('description_fr')->nullable();
            $table->integer('ratings')->nullable();
            $table->foreignId('featured_places_id');
            $table->string('osm_id')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->enum('status', ['1', '0']);
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
        Schema::dropIfExists('featured_places_list');
    }
}
