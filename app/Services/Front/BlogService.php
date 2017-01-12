<?php 
namespace App\Services\Front;

use App\Repositories\Eloquent\ArticleRepositoryEloquent;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use App\Repositories\Contracts\CommentRepository;

use App\Traits\ServiceTrait;

class BlogService{
	use ServiceTrait;

	protected $articleRepo;
	public function __construct(
		ArticleRepositoryEloquent $articleRepo,
		UserRepositoryEloquent $userRepo,
		CommentRepository $commentRepo
	){
		$this->articleRepo = $articleRepo;
		$this->userRepo = $userRepo;
		$this->commentRepo = $commentRepo;
	}

	public function index(){
		$userInfo = $this->userRepo->first();

		$count = $userInfo->articles->count();

		/*获取文章*/
		$articleList = $this->articleRepo->with(['user'])->paginate(6);

		/*最新4条评论*/
		$comments = $this->commentRepo->last();

		return [
			'articleList' => $articleList,
			'count' => $count,
			'userInfo' => $userInfo,
			'comments' => $comments,
		];
	}

	public function show($id){
		/*获取最新的8篇*/
		$articleLasts = $this->articleRepo->last();
		/*文章详情*/
		$articleInfo = $this->articleRepo->with(['user'])->find($id);

		return [
			'articleInfo' => $articleInfo,
			'articleList' => $articleList,
		];
	}
}