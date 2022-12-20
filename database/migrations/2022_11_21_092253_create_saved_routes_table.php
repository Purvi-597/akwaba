<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\Double;

class CreateSavedRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_routes', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('start_coordinates');
            $table->string('end_coordinates');
            $table->string('start_address');
            $table->string('end_address');
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
        Schema::dropIfExists('saved_routes');
    }
}
