<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Backend\BlogService as Service;

use App\Traits\ControllerTrait;
class BlogController extends Controller
{
	use ControllerTrait;
	
	protected $service;
	protected $folder = '';
	public function __construct(Service $service){
		$this->service = $service;
		$this->folder = $this->getTheme() . $this->getModule();
	}
	/**
	 * 博客菜单管理
	 * @author xezw211@126.com
	 */
    public function menu(){
    	$results = $this->service->menu();
        $manageMenus = $results['menus'];
        $menuRelations = $results['menuRelations'];

        return view($this->getView('menu'), compact('manageMenus', 'menuRelations'));
    }
}
