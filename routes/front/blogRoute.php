<?php 
$router->group([], function($router){

	$router->group(['prefix' => 'blog'], function($router){
		$router->get('lists', [
			'uses' => 'BlogController@lists',
			'as' => 'lists',
		]);
	});

	$router->resource('blog', 'BlogController');
});