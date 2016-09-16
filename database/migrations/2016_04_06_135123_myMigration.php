<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //this is what i used to create the database tables
        Schema::create('maincontents', function(Blueprint $table){
            $table->increments('id');
            $table->integer('User_id')->unsigned()->default(0); 
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('header');
            $table->string('main_content');
            $table->string('image_name');
            $table->timestamps();
        });

        Schema::create('othercontents', function(Blueprint $table){
            $table->increments('id');
            $table->integer('User_id')->unsigned()->default(0); 
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('header');
            $table->string('main_content');
            $table->string('image_name');
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
        //to drop the database table
        Schema::drop('maincontents');

        Schema::drop('othercontents');
    }
}
