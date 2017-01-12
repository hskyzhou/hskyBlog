<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogMenuRelationsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_menu_relations', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('blog_menu_id')->unsigned()->index();
            $table->foreign('blog_menu_id')->references('id')->on('blog_menus')->onDelete('cascade');

            $table->integer('parent_blog_menu_id')->unsigned()->index();
            $table->foreign('parent_blog_menu_id')->references('id')->on('blog_menus')->onDelete('cascade');
            
            $table->tinyInteger('sort')->unsigned()->comment("排序");

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
		Schema::drop('blog_menu_relations');
	}

}
