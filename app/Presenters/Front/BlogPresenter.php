<?php 

namespace App\Presenters\Front;

class BlogPresenter{

	/*显示首页文章列表*/
	public function showArticleList($articleList){
		$str = "";

		if(!$articleList->isEmpty()){
			foreach($articleList as $articleInfo){
				$str .= '<!-- Story -->';
				$str .= '<div class="block">';
				$str .= '    <div class="block-content">';
				$str .= '        <div class="row items-push">';
				$str .= '            <div class="col-md-4">';
				$str .= '                <a href="'.route('blog.show', [$articleInfo->id]).'">';
				if($articleInfo->logo_name){
					$str .= '	            <img class="img-responsive" src="'.asset('storage' . $articleInfo->logo_name).'" alt="">';
				}else{
					$str .= '               <img class="img-responsive" src="'.asset('default.jpg').'" alt="">';
				}
				$str .= '                </a>';
				$str .= '            </div>';
				$str .= '            <div class="col-md-8">';
				$str .= '                <div class="font-s12 push-10">';
				$str .= '                    <em class="pull-right">10 min</em>';
				$str .= '                    <a href="base_pages_profile.html" class="uppercase">'.$articleInfo->user->name.'</a> on ' . $articleInfo->created_at->format('M d, Y');
				$str .= '                </div>';
				$str .= '                <h4 class="text-uppercase push-10">';
				$str .= '                	<a class="text-primary-dark" href="'.route('blog.show', [$articleInfo->id]).'">'.$articleInfo->name.'</a>';
				$str .= '                </h4>';
				$str .= '                <p class="push-20">'.$articleInfo->description.'</p>';
				$str .= '                <div class="btn-group btn-group-sm">';
				$str .= '                    <a class="btn btn-default" href="javascript:void(0)"><i class="fa fa-share-alt push-5-r"></i> Share</a>';
				$str .= '                    <a class="btn btn-default" href="'.route('blog.show', [$articleInfo->id]).'">Continue Reading..</a>';
				$str .= '                </div>';
				$str .= '            </div>';
				$str .= '        </div>';
				$str .= '    </div>';
				$str .= '</div>';
				$str .= '<!-- END Story -->';
			}
		}
		return $str;
	}


	/*显示评论*/
	public function showCommentList($comments){
		$str = '';

		if(!$comments->isEmpty()){
			foreach($comments as $comment){
				$str .= '<li>';
				$str .= '    <div class="push-5 clearfix">';
				$str .= '        <span class="font-s13 text-muted push-10-l pull-right">25 min ago</span>';
				$str .= '        <a class="font-w600" href="base_pages_profile.html">'.$comment->commentor.'</a> on <a href="'.route('blog.show', [$comment->article_id]).'">'.$comment->article->name.'</a>';
				$str .= '    </div>';
				$str .= '    <div class="font-s13">'.$comment->comment.'</div>';
				$str .= '</li>';
			}
		}

		return $str;
	}

	/*详情页-显示最近文章*/
	public function showLastArticles($articleList){

	}
}