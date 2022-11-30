<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerifyFieldInPlaceAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('place_advertisement', function (Blueprint $table) {
            //'
            $table->enum('is_verify', ['1', '0'])->after('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('place_advertisement', function (Blueprint $table) {
            //
            $table->dropColumn('is_verify');
        });
    }
}
