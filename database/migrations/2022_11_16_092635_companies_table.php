<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email');
            $table->string('name');
            $table->text('area_of_activity')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('phone_number_comment');
            $table->string('website');
            $table->string('opening_hours');
            $table->string('description');
            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->enum('status', ['1', '0']);
            $table->enum('is_verify', ['1', '0']);
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
        //
    }
}
