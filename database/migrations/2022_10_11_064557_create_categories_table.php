<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('display_name');
            // $table->string('name_fr');
            $table->string('display_name_fr');
            $table->text('image')->nullable();
            $table->enum('status', ['1', '0']);
            $table->timestamps();
            $table->softDeletes();
        });


$data = [
    ['name'=>'Sustenance', 'display_name'=> 'Eat Out','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-supermarket', 'display_name'=> 'Groceries','display_name_fr' =>'', 'image'=>'1667915729_bar.png','status' => 1],
    ['name'=>'shop-mall', 'display_name'=> 'Malls','display_name_fr' =>'', 'image'=>'1667915730_bar.png','status' => 1],
    ['name'=>'advertisement', 'display_name'=> 'Dental','display_name_fr' =>'', 'image'=>'1667915731_bar.png','status' => 1],
    ['name'=>'tourism-hotel', 'display_name'=> 'Hotels','display_name_fr' =>'', 'image'=>'1667915732_bar.png','status' => 1],
    ['name'=>'shop-gas', 'display_name'=> 'Gas','display_name_fr' =>'', 'image'=>'1667915733_bar.png','status' => 1],
    ['name'=>'Transportation', 'display_name'=> 'Car service centers','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-beauty', 'display_name'=> 'Beauty','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Entertainment', 'display_name'=> 'Entertainment','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Healthcare', 'display_name'=> 'Healthcare','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'vehicles', 'display_name'=> 'Car accessories','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Goods', 'display_name'=> 'Goods','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Services', 'display_name'=> 'Services','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Tourism-tourism', 'display_name'=> 'Tourism','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-shop', 'display_name'=> 'Specialty stores','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-shop', 'display_name'=> 'Sports','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Education', 'display_name'=> 'Education','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Public Service', 'display_name'=> 'Government','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-shope', 'display_name'=> 'Repair, construction','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'shop-shop', 'display_name'=> 'Industrial goods','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'B2B Services', 'display_name'=> 'B2B services','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],
    ['name'=>'Others', 'display_name'=> 'Others','display_name_fr' =>'', 'image'=>'1667915728_bar.png','status' => 1],

    ];


    DB::table('categories')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
