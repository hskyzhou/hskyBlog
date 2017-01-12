<?php


$router->group(['prefix' => 'blog', 'as' => 'blog.'], function($router){

	/*博客菜单*/
	$router->group(['namespace' => 'Blog'], function($router){
		$router->resource('menu', 'MenuController');
	});
});

$router->resource('blog', 'BlogController');
