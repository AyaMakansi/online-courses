<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcourses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           $table->foreignId('item_id')->references('id')->on('catitems')->onDelete('cascade');
           // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('image');
            $table->integer('number');
            $table->time('time');
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
        Schema::dropIfExists('itemcourses');
    }
}
