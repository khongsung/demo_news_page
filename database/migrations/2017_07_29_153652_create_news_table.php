<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ks01_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('content');
            $table->string('image');
            $table->integer('status')->default(1);
            $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('ks01_categories');
            $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('ks01_users');
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
        Schema::dropIfExists('ks01_news');
    }
}
