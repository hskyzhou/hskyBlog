<?php

$router->group(['prefix' => 'admin'], function($router){

	$router->group(['prefix' => 'blog', 'as' => 'admin.blog.'], function($router){
		$router->post('menu', [
			'uses' => 'BlogController@menu',
			'as' => 'menu'
		]);
	});

	$router->resource('blog', 'BlogController');
});