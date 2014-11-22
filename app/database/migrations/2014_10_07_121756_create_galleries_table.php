<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galleries', function($table)
    {
			$table->increments('id');
	    $table->string('title');
	    $table->string('subtitle');
	    $table->text('summary');
	    $table->text('content');
	    $table->enum('type', array('single article', 'blog articles'))->default('blog articles');
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
		Schema::drop('galleries');
	}

}
