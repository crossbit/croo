<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img_path');
            $table->string('img_path2')->nullable();
            $table->string('img_path3')->nullable();
            $table->string('img_path4')->nullable();
            $table->text('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('portfolios');
    }
}
