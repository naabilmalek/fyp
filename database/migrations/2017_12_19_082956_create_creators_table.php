<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture')->nullable();
            $table->string('name')->nullable();
            $table->string('bio')->nullable();
            $table->string('ic_no')->nullable();
            $table->string('location')->nullable();
            $table->string('website_URL')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_acc_holder')->nullable();
            $table->string('acc_num')->nullable();
            
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
        Schema::dropIfExists('creators');
    }
}
