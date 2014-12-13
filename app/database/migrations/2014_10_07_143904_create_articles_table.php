<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table)
    	{
			$table->increments('id');
		    $table->integer('gallery_id')->unsigned();
		    $table->string('title');
		    $table->string('subtitle');
		    $table->text('summary');
		    $table->text('content');
		    $table->string('thumb');
		    $table->string('image');
		    $table->string('carousel_img1');
		    $table->string('carousel_img2');
		    $table->string('carousel_img3');
		    $table->softDeletes();
		    $table->timestamps();
		    $table->foreign('gallery_id')
	        ->references('id')->on('galleries')
	        ->onDelete('cascade');
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
