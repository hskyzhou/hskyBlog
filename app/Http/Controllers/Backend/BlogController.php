<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Backend\BlogService as Service;
class BlogController extends Controller
{
	protected $service;
	public function __construct(Service $service){
		$this->service = $service;
	}
	/**
	 * 博客菜单管理
	 * @author xezw211@126.com
	 */
    public function menu(){
    	dd('ccc');
    	$results = $this->service->menu();
        $manageMenus = $results['menus'];
        $menuRelations = $results['menuRelations'];

        return view($this->getView('index'), compact('manageMenus', 'menuRelations'));
    }
}
