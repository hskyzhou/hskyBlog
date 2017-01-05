<?php 
namespace App\Services\Front;

use App\Repositories\Eloquent\ArticleRepositoryEloquent;

use App\Traits\ServiceTrait;

class BlogService{
	use ServiceTrait;

	protected $articleRepo;
	public function __construct(ArticleRepositoryEloquent $articleRepo){
		$this->articleRepo = $articleRepo;
	}

	public function index(){
		/*获取文章*/
		$articleList = $this->articleRepo->with(['user'])->paginate(6);

		return [
			'articleList' => $articleList
		];
	}

	public function show($id){
		/*文章详情*/
		$articleInfo = $this->articleRepo->with(['user'])->find($id);

		return [
			'articleInfo' => $articleInfo
		];
	}
}