<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_image')->default('default.jpg');
            $table->string('phone_no')->nullable();
            $table->string('user_bio')->nullable();
            $table->string('ic_passport')->nullable();
            $table->string('location_user')->nullable();
            $table->string('userweb_url')->nullable();
            $table->string('matric_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_acc_holder')->nullable();
            $table->string('acc_num')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
