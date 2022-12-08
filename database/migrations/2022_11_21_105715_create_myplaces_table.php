<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myplaces', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('location_coordinates');
            $table->double('location_address');
            $table->string('category');
            $table->string('osmid');
            $table->integer('is_deleted');
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
        Schema::dropIfExists('myplaces');
    }
}
