<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarDetailToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advertisement', function (Blueprint $table) {
            $table->string('car_name');
            $table->string('car_model');
            $table->string('car_year');
            $table->string('car_transmission');
            $table->string('car_fuel');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertisement', function (Blueprint $table) {
            //
        });
    }
}
