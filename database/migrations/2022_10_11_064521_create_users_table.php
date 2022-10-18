<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_no');
            $table->enum('role', ['Admin', 'User']);
            $table->text('home_address')->nullable();
            $table->text('work_address')->nullable();
            $table->foreignId('mycar_id')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('device_type')->nullable();
            $table->string('device_token')->nullable();
            $table->rememberToken();
            $table->enum('status', ['1', '0']);
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'purvi.trivedi@sapphiresolutions.net',
                'password' => '$2y$10$LSOjPL2S9ZlFsP8Jda7qre5CchV56tqSvAve5eyRczjfwAUb9nTHC',
                'contact_no' => '1234567890',
                'role' => 'Admin',
                'status' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
