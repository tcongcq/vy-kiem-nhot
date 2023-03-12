@extends('site.layouts.home')

@section('body-class')
post-template-default single single-post postid-2251 single-format-standard theme-autocare woocommerce-js wpb-js-composer js-comp-ver-6.9.0 vc_responsive
@endsection

@section('main')
@include('site.news.post_detail_css')
<div class="page-wrapper">
    @include('site.includes.header')
    <section class="breadcrumb-area" style="background-image:url('{{ url(!empty($post->avatar) ? $post->avatar : '/wp-content/uploads/2022/01/istockphoto-502758870-612x612-1.jpg') }}');">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="breadcrumbs text-center">
    					<h1>{{ $post->title }}</h1>
    					<h4></h4>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="breadcrumb-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<ul id="breadcrumbs" class="breadcrumbs">
						<li class="item-cat">
							<a href="/news?cat={{ $post->post_category->id }}">{{ $post->post_category->name }}</a>
						</li>
						<li class="separator"></li>
						<li class="item-current item-2251">
							<span class="bread-current bread-2251" title="{{ $post->title }}">{{ $post->title }}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
    <section class="blog-details-content-area">
	    <div class="container">
	        <div class="row">
	            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
	                <div class="blog-details-content">
	                    <div class="single-blog-post">
	                        <div class="content-box">
	                            <div class="content d-content">
	                                <div class="vc_row wpb_row vc_row-fluid">
	                                    <div class="wpb_column vc_column_container vc_col-sm-12">
	                                        <div class="vc_column-inner">
	                                            <div class="wpb_wrapper">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p>
	                                                        	{!! $post->content !!}
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                                <div class="vc_empty_space" style="height: 32px">
	                                                    <span class="vc_empty_space_inner"></span>
	                                                </div>
	                                                <div class="wpb_gallery wpb_content_element vc_clearfix">
	                                                    <div class="wpb_wrapper">
	                                                        <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
	                                                            <ul class="wpb_image_grid_ul">
	                                                            	@foreach(json_decode($post->attachments, true) as $img)
	                                                            	<li class="isotope-item">
	                                                                    <a data-lightbox="lightbox[rel-2251-4254507197]">
	                                                                        <img width="150" height="150" src="{{ url($img) }}" class="attachment-thumbnail" title="{{ $img }}">
	                                                                    </a>
	                                                                </li>
	                                                            	@endforeach
	                                                            </ul>
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
	        </div>
	    </div>
	</section>

    @include('site.includes.footer')
</div>
@endsection