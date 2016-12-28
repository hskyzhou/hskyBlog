<?php

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
		Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name')->comment('文章标题');
            $table->string('short_name')->comment('文章短标题');
            $table->text('markdown')->comment('markdown内容');
            $table->text('html')->comment('markdown的html');
            $table->integer('creator_id')->comment('文章作者');
            $table->tinyInteger('status')->comment('文章状态');

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
		Schema::drop('articles');
	}

}
