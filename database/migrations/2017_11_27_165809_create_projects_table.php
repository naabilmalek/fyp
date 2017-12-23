<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_image')->nullable();          
            $table->string('project_name')->nullable();
            $table->string('project_URL')->nullable();
            $table->string('website_URL')->nullable();
            $table->string('project_desc')->nullable();
            $table->date('funding_end_date')->nullable();
            $table->string('fund_goal')->nullable();
            $table->string('video_URL')->nullable();
            $table->string('project_story')->nullable();
            $table->integer('user_id')->nullable();
            
           

            
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
        Schema::dropIfExists('projects');
    }
}
