<?php

$router->group([], function($router){

	$router->group(['prefix' => 'article', 'as' => 'article.'], function($router){
		$router->post('datatables', [
			'uses' => 'ArticleController@datatables',
			'as' => 'datatables'
		]);

		$router->post('delete/{id}', [
			'uses' => 'ArticleController@delete',
			'as' => 'delete'
		]);

		$router->post('restore/{id}', [
			'uses' => 'ArticleController@restore',
			'as' => 'restore'
		]);

		$router->post('deletemore/', [
			'uses' => 'ArticleController@deleteMore',
			'as' => 'delete.more'
		]);

		$router->post('restoremore', [
			'uses' => 'ArticleController@restoreMore',
			'as' => 'restore.more'
		]);

		$router->post('destroymore', [
			'uses' => 'ArticleController@destroyMore',
			'as' => 'destroy.more'
		]);
	});

	$router->resource('menu', 'ArticleController');
});