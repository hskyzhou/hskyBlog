<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Front\BlogService as Service;

use App\Traits\ControllerTrait;

class BlogController extends Controller
{	
	use ControllerTrait;

	protected $service;
    public function __construct(Service $service){
    	$this->service = $service;
    	$this->folder = $this->getFrontTheme() . $this->getModule();
    }

    public function index(){
    	$results = $this->service->index();
    	return view($this->getView('index'))->with($results);
    }

    public function lists(){
    	$results = $this->service->index();
    	return view($this->getView('lists'))->with($results);
    }

    public function show($id){
    	$results = $this->service->show($id);
    	return view($this->getView('show'))->with($results);
    }
}
