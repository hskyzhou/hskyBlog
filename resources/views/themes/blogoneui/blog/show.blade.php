@extends('themes.blogoneui.layout')

@section('content')
	<div class="bg-image" style="background-image: url('assets/img/photos/photo23@2x.jpg');">
	    <div class="bg-primary-dark">
	        <section class="content content-full content-boxed overflow-hidden">
	            <!-- Section Content -->
	            <div class="push-150-t push-150 text-center">
	                <h1 class="text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Travel the world and feel alive.</h1>
	                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Experience life like never before.</h2>
	            </div>
	            <!-- END Section Content -->
	        </section>
	    </div>
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
	            </div>
	        </div>
	        <!-- END Section Content -->
	    </section>
	</div>
	<!-- END Story Content -->

	<!-- More Stories -->
	<section class="content content-boxed">
	    <!-- Section Content -->
	    <div class="row push-30-t push-30">
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo2.jpg');">
	                    <h4 class="text-white push-50-t push">10 Productivity Tips</h4>
	                </div>
	                <div class="block-content block-content-full font-s12">
	                    <em class="pull-right">12 min</em>
	                    <span class="text-primary">Ethan Howard</span> on July 2, 2015
	                </div>
	            </a>
	        </div>
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo10.jpg');">
	                    <h4 class="text-white push-50-t push">Travel &amp; Work</h4>
	                </div>
	                <div class="block-content block-content-full font-s12">
	                    <em class="pull-right">15 min</em>
	                    <span class="text-primary">Linda Moore</span> on July 6, 2015
	                </div>
	            </a>
	        </div>
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo3.jpg');">
	                    <h4 class="text-white push-50-t push">New Image Gallery</h4>
	                </div>
	                <div class="block-content block-content-full font-s13">
	                    <em class="pull-right">10 min</em>
	                    <span class="text-primary">Amy Hunter</span> on June 29, 2015
	                </div>
	            </a>
	        </div>
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo23.jpg');">
	                    <h4 class="text-white push-50-t push">Explore the World</h4>
	                </div>
	                <div class="block-content block-content-full font-s12">
	                    <em class="pull-right">13 min</em>
	                    <span class="text-primary">Joshua Munoz</span> on June 16, 2015
	                </div>
	            </a>
	        </div>
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo22.jpg');">
	                    <h4 class="text-white push-50-t push">Follow Your Dreams</h4>
	                </div>
	                <div class="block-content block-content-full font-s12">
	                    <em class="pull-right">10 min</em>
	                    <span class="text-primary">Rebecca Reid</span> on May 23, 2015
	                </div>
	            </a>
	        </div>
	        <div class="col-sm-4">
	            <a class="block block-link-hover2" href="javascript:void(0)">
	                <div class="block-content bg-image" style="background-image: url('assets/img/photos/photo24.jpg');">
	                    <h4 class="text-white push-50-t push">Top 10 Destinations</h4>
	                </div>
	                <div class="block-content block-content-full font-s12">
	                    <em class="pull-right">7 min</em>
	                    <span class="text-primary">Helen Silva</span> on May 15, 2015
	                </div>
	            </a>
	        </div>
	    </div>
	    <!-- END Section Content -->
	</section>
@endsection