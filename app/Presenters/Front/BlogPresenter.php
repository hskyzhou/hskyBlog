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
				$str .= '                <a href="frontend_blog_story.html">';
				$str .= '                    <img class="img-responsive" src="assets/img/photos/photo21.jpg" alt="">';
				$str .= '                </a>';
				$str .= '            </div>';
				$str .= '            <div class="col-md-8">';
				$str .= '                <div class="font-s12 push-10">';
				$str .= '                    <em class="pull-right">10 min</em>';
				$str .= '                    <a href="base_pages_profile.html">Craig Stone</a> on July 16, 2015';
				$str .= '                </div>';
				$str .= '                <h4 class="text-uppercase push-10">';
				$str .= '                	<a class="text-primary-dark" href="frontend_blog_story.html">'.$articleInfo->name.'</a>';
				$str .= '                </h4>';
				$str .= '                <p class="push-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..</p>';
				$str .= '                <div class="btn-group btn-group-sm">';
				$str .= '                    <a class="btn btn-default" href="javascript:void(0)"><i class="fa fa-share-alt push-5-r"></i> Share</a>';
				$str .= '                    <a class="btn btn-default" href="frontend_blog_story.html">Continue Reading..</a>';
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

/*
<!-- Story -->
<div class="block">
    <div class="block-content">
        <div class="row items-push">
            <div class="col-md-4">
                <a href="frontend_blog_story.html">
                    <img class="img-responsive" src="assets/img/photos/photo21.jpg" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <div class="font-s12 push-10">
                    <em class="pull-right">10 min</em>
                    <a href="base_pages_profile.html">Craig Stone</a> on July 16, 2015
                </div>
                <h4 class="text-uppercase push-10"><a class="text-primary-dark" href="frontend_blog_story.html">Top 10 Destinations</a></h4>
                <p class="push-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..</p>
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-default" href="javascript:void(0)"><i class="fa fa-share-alt push-5-r"></i> Share</a>
                    <a class="btn btn-default" href="frontend_blog_story.html">Continue Reading..</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Story -->
*/