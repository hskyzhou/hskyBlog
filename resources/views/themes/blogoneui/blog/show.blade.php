@extends('themes.blogoneui.layout')

@section('content')
	<div class="bg-primary-dark">
	    <section class="content content-full content-boxed overflow-hidden">
	        <!-- Section Content -->
	        <div class="push-100-t push-50 text-center">
	            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">以我手写我之心得</h1>
	            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">些许感悟</h2>
	        </div>
	        <!-- END Section Content -->
	    </section>
	</div>
	<!-- END Hero Content -->

	<!-- Story Content -->
	<div class="bg-white">
	    <section class="content content-boxed">
	        <!-- Section Content -->
	        <div class="text-center">
	            <a class="link-effect font-s13 font-w600" href="javascript:void(0)">{{$articleInfo->user->name}}</a> on {{$articleInfo->created_at->format('M d, Y')}} &bull; <em>5 min</em>
	        </div>
	        <div class="row push-50-t push-50 nice-copy-story">
	            <div class="col-sm-8 col-sm-offset-2">
	                {!! $articleInfo->html !!}

	                <!-- 畅言评论开始 -->
					<a href="#SOHUCS" id="changyan_count_unit"></a>//评论数
					<a href="#SOHUCS" id="changyan_parti_unit"></a>//参与数
					<script type="text/javascript" src="http://assets.changyan.sohu.com/upload/plugins/plugins.count.js">
					</script>

					<div id="SOHUCS" sid="{{$articleInfo->id}}"></div>
					<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
					<script type="text/javascript">
						window.changyan.api.config({
						appid: 'cysMGheCq',
						conf: 'prod_af08e4d88351c6b722441386de1de162'
						});
					</script>
					<!-- 畅言评论结束 -->
	            </div>
	        </div>
	        <!-- END Section Content -->
	    </section>
	</div>

	<!--PC版-->
	<div class="bg-white">
	    <section class="content content-boxed">
		</section>
	</div>
	
	<!-- END Story Content -->

	<!-- More Stories -->
	<section class="content content-boxed">
	    <!-- Section Content -->
	    <div class="row push-30-t push-30">
	    	@if(!$articleLasts->isEmpty())
	    		@foreach($articleLasts as $articleLast)
	    			<div class="col-sm-4">
	    			    <a class="block block-link-hover2" href="{{route('blog.show', [$articleLast->id])}}">
	    			        <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo2.jpg');">
	    			            <h4 class="text-white push-50-t push">{{$articleLast->name}}</h4>
	    			        </div>
	    			        <div class="block-content block-content-full font-s12">
	    			            <em class="pull-right">12 min</em>
	    			            <span class="text-primary">{{$articleLast->user->name}}</span> {{$articleLast->created_at->format('M d, Y')}}
	    			        </div>
	    			    </a>
	    			</div>
	    		@endforeach
	    	@endif
	    </div>
	    <!-- END Section Content -->
	</section>
@endsection