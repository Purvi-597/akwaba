<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_advertisement', function (Blueprint $table) {
            $table->id();
            $table->string('place_name_en');
            $table->string('place_name_fr');
            $table->text('image')->nullable();
            $table->enum('type', ['POI', 'External']);
            $table->text('external_link')->nullable();
            $table->string('osm_id')->nullable();
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
        Schema::dropIfExists('place_advertisement');
    }
}
