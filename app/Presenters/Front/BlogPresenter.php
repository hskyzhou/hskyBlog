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
				$str .= '                    <img class="img-responsive" src="'.$articleInfo->logo.'" alt="">';
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
}