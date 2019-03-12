<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('article_id')->unsigned();
            $table->string('name');
            $table->text('descraption');
            $table->integer('rent_price');
             $table->bigInteger('category_id')->unsigned(1);
             $table->bigInteger('city_id')->unsigned(1);

             $table->bigInteger('user_id')->unsigned(1);
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
        Schema::dropIfExists('articles');
    }
}
