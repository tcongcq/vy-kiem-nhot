@extends('site.layouts.home')

@section('main')
@include('site.news.news_css')
<script type="text/javascript">
	var loadNews = function(){
		$grid = $('.vc_pageable-slide-wrapper').imagesLoaded( function() {
		  	$grid.masonry({
			    itemSelector: '.vc_grid-item',
			    percentPosition: true,
			    columnWidth: '.vc_col-sm-4'
		  	}); 
		});
		$('.vc_grid').show();
	}
	window.onload = function(){
		loadNews();
	}
</script>
<div class="page-wrapper">
    @include('site.includes.header')
    <section class="breadcrumb-area" style="background-image:url('/wp-content/uploads/2018/09/news-bg.jpg');">
    	<div class="container">
	    	<div class="row">
		    	<div class="col-md-12">
		    		<div class="breadcrumbs text-center">
		    			<h1>{{ __('locale.menu.news') }}</h1>
		    			<h4></h4>
		    		</div>
		    	</div>
		    </div>
		</div>
	</section>
	<section class="large-blog-content-area">
	    <div class="container">
	        <div class="row">
	            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
	                <div class="large-blog-post">
	                    <div class="vc_row wpb_row vc_row-fluid">
	                        <div class="wpb_column vc_column_container vc_col-sm-12">
	                            <div class="vc_column-inner">
	                                <div class="wpb_wrapper">
	                                    <div class="wpb_text_column wpb_content_element ">
	                                        <div class="wpb_wrapper"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="vc_row wpb_row vc_row-fluid">
	                        <div class="wpb_column vc_column_container vc_col-sm-12">
	                            <div class="vc_column-inner">
	                                <div class="wpb_wrapper">
	                                    <div class="vc_grid-container-wrapper vc_clearfix vc_grid-animation-fadeIn">
	                                        <div class="vc_grid-container vc_clearfix wpb_content_element vc_masonry_grid">
	                                            <ul class="vc_grid-filter vc_clearfix vc_grid-filter-default-less-rounded vc_grid-filter-size-md vc_grid-filter-center vc_grid-filter-color-grey">
	                                                <a href="/news" class="{{ !\Request::has('cat') ? 'vc_active' : '' }} vc_grid-filter-item">
	                                                    <span>All</span>
	                                                </a>
	                                                @foreach($categories as $cat)
	                                                <a href="/news?cat={{ $cat->id }}" class="{{ $cat->id == \Request::get('cat') ? 'vc_active' : '' }} vc_grid-filter-item">
	                                                    <span>{{ $cat->name }}</span>
	                                                </a>
	                                                @endforeach
	                                            </ul>
	                                            <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover" style="display: none;">
	                                                <div class="vc_pageable-slide-wrapper vc_clearfix">
	                                                @foreach($posts as $post)
	                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-4 vc_grid-item-zone-c-bottom vc_grid-term-96 vc_visible-item">
	                                                        <div class="vc_grid-item-mini vc_clearfix">
	                                                            <div class="vc_gitem-animated-block">
	                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link" style="background-image: url('{{ url($post->avatar ? $post->avatar : '') }}') !important;">
	                                                                    <a href="/news/{{ $post->alias }}" title="{{ $post->title }}" class="vc_gitem-link vc-zone-link"></a>
	                                                                    <img src="{{ url($post->avatar ? $post->avatar : '') }}" class="vc_gitem-zone-img" alt="Badulla Regional Technical Meeting of SINOPEC">
	                                                                    <div class="vc_gitem-zone-mini"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1419328663991">
	                                                                <div class="vc_gitem-zone-mini">
	                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
	                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
	                                                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
	                                                                                <h4 style="text-align: left">{{ $post->title }}</h4>
	                                                                            </div>
	                                                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_excerpt">
	                                                                                <p style="text-align: left">{!! $post->introduce !!}</p>
	                                                                            </div>
	                                                                            <div class="vc_btn3-container vc_btn3-left">
	                                                                                <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-color-juicy-pink" 
	                                                                                	href="/news/{{ $post->alias }}" 
	                                                                                	title="Read more"
	                                                                                	>Read more</a>
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="vc_clearfix"></div>
	                                                    </div>
	                                                @endforeach
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
    @include('site.includes.footer')
</div>
@endsection