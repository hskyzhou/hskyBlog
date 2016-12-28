<?php 
if(!function_exists('getUser')){
	function getUser($user = ''){
		return $user ? $user : auth()->user();
	}
}

if(!function_exists('getUserId')){
	/*获取用户的id*/
	function getUserId(){
		$user = getUser();
		return $user->id;
	}
}