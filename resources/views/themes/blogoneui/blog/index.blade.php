@inject('presenter', 'App\Presenters\Front\BlogPresenter')
@extends('themes.blogoneui.layout')

@section('content')
	<div class="bg-primary-dark">
	    <section class="content content-full content-boxed overflow-hidden">
	        <!-- Section Content -->
	        <div class="push-100-t push-50 text-center">
	            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">The latest stories only for you.</h1>
	            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Feel free to explore and read.</h2>
	        </div>
	        <!-- END Section Content -->
	    </section>
	</div>


	<!-- Classic Content -->
	<section class="content content-boxed">
	    <!-- Section Content -->
	    <div class="push-50-t push-50">
	        <div class="row">
	            <div class="col-md-8">
	                {!! $presenter->showArticleList($articleList) !!}

	                

	                <!-- Pagination -->
	                <nav>
	                    <ul class="pagination">
	                        <li class="active">
	                            <a href="javascript:void(0)">1</a>
	                        </li>
	                        <li>
	                            <a href="javascript:void(0)">2</a>
	                        </li>
	                        <li>
	                            <a href="javascript:void(0)">3</a>
	                        </li>
	                        <li>
	                            <a href="javascript:void(0)">4</a>
	                        </li>
	                        <li>
	                            <a href="javascript:void(0)">5</a>
	                        </li>
	                        <li>
	                            <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
	                        </li>
	                    </ul>
	                </nav>
	                <!-- END Pagination -->
	            </div>
	            <div class="col-md-4">
	                <!-- Search -->
	                <div class="block">
	                    <div class="block-header bg-gray-lighter">
	                        <h3 class="block-title">Search</h3>
	                    </div>
	                    <div class="block-content block-content-full">
	                        <form action="frontend_search.html" method="post">
	                            <div class="input-group input-group-lg">
	                                <input class="form-control" type="text" placeholder="Type and hit enter..">
	                                <div class="input-group-btn">
	                                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <!-- END Search -->

	                <!-- About -->
	                <a class="block block-link-hover3" href="base_pages_profile.html">
	                    <div class="block-header bg-gray-lighter">
	                        <h3 class="block-title">About</h3>
	                    </div>
	                    <div class="block-content block-content-full text-center">
	                        <div>
	                            <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar1.jpg" alt="">
	                        </div>
	                        <div class="h5 push-15-t push-5">Evelyn Willis</div>
	                        <div class="font-s13 text-muted">Publisher</div>
	                    </div>
	                    <div class="block-content border-t">
	                        <div class="row items-push text-center">
	                            <div class="col-xs-6">
	                                <div class="push-5"><i class="si si-pencil fa-2x"></i></div>
	                                <div class="h5 font-w300 text-muted">350 Stories</div>
	                            </div>
	                            <div class="col-xs-6">
	                                <div class="push-5"><i class="si si-users fa-2x"></i></div>
	                                <div class="h5 font-w300 text-muted">1.5k Followers</div>
	                            </div>
	                        </div>
	                    </div>
	                </a>
	                <!-- END About -->

	                <!-- Recent Comments -->
	                <div class="block">
	                    <div class="block-header bg-gray-lighter">
	                        <ul class="block-options">
	                            <li>
	                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
	                            </li>
	                        </ul>
	                        <h3 class="block-title">Recent Comments</h3>
	                    </div>
	                    <div class="block-content">
	                        <ul class="list list-simple">
	                            <li>
	                                <div class="push-5 clearfix">
	                                    <span class="font-s13 text-muted push-10-l pull-right">25 min ago</span>
	                                    <a class="font-w600" href="base_pages_profile.html">Helen Silva</a> on <a href="frontend_blog_story.html">Exploring the Alps</a>
	                                </div>
	                                <div class="font-s13">Awesome trip! Looking forward going there, I'm sure it will be a great experience!</div>
	                            </li>
	                            <li>
	                                <div class="push-5 clearfix">
	                                    <span class="font-s13 text-muted push-10-l pull-right">42 min ago</span>
	                                    <a class="font-w600" href="base_pages_profile.html">Denise Watson</a> on <a href="frontend_blog_story.html">Travel &amp; Work</a>
	                                </div>
	                                <div class="font-s13">Thank you for sharing your story with us! I really appreciate the info, it will come in handy for sure!</div>
	                            </li>
	                            <li>
	                                <div class="push-5 clearfix">
	                                    <span class="font-s13 text-muted push-10-l pull-right">53 min ago</span>
	                                    <a class="font-w600" href="base_pages_profile.html">Roger Hart</a> on <a href="frontend_blog_story.html">Black &amp; White</a>
	                                </div>
	                                <div class="font-s13">Really touching story.. I'm so happy everything went well at the end!</div>
	                            </li>
	                            <li>
	                                <div class="push-5 clearfix">
	                                    <span class="font-s13 text-muted push-10-l pull-right">2 days ago</span>
	                                    <a class="font-w600" href="base_pages_profile.html">Adam Hall</a> on <a href="frontend_blog_story.html">Sleep Better</a>
	                                </div>
	                                <div class="font-s13">Great advice! Thanks for sharing, I'm sure it will help many people sleep better and improve their lifes.</div>
	                            </li>
	                        </ul>
	                        <div class="text-center push">
	                            <small><a href="javascript:void(0)">Read More..</a></small>
	                        </div>
	                    </div>
	                </div>
	                <!-- END Recent Comments -->

	                <!-- Social -->
	                <div class="block">
	                    <div class="block-header bg-gray-lighter">
	                        <h3 class="block-title">Social</h3>
	                    </div>
	                    <div class="block-content block-content-full">
	                        <div class="btn-group">
	                            <a class="btn btn-default" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa fa-fw fa-twitter"></i></a>
	                            <a class="btn btn-default" href="javascript:void(0)" data-toggle="tooltip" title="Like our Facebook page"><i class="fa fa-fw fa-facebook"></i></a>
	                            <a class="btn btn-default" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Google Plus"><i class="fa fa-fw fa-google-plus"></i></a>
	                            <a class="btn btn-default" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Dribbble"><i class="fa fa-fw fa-dribbble"></i></a>
	                            <a class="btn btn-default" href="javascript:void(0)" data-toggle="tooltip" title="Subscribe on Youtube"><i class="fa fa-fw fa-youtube"></i></a>
	                        </div>
	                    </div>
	                </div>
	                <!-- END Social -->
	            </div>
	        </div>
	    </div>
	    <!-- END Section Content -->
	</section>
	<!-- END Classic Content -->
@endsection