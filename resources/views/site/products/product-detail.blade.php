@extends('site.layouts.home')

@section('body-class')
product-template-default single single-product postid-2330 theme-autocare woocommerce woocommerce-page woocommerce-js wpb-js-composer js-comp-ver-6.9.0 vc_responsive
@endsection

@section('main')
@include('site.products.product-detail-css')
<div class="page-wrapper">
    @include('site.includes.header')

    <section class="breadcrumb-bottom-area">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12">
    				<ul id="breadcrumbs" class="breadcrumbs">
    					<li class="item-cat item-custom-post-type-product">
    						<a class="bread-cat bread-custom-post-type-product" href="/products" title="Products">Products</a>
    					</li>
    					<li class="separator"></li>
    					<li class="item-cat item-cat-82 item-cat-diesel-engine-oil">
    						<a class="bread-cat bread-cat-82 bread-cat-diesel-engine-oil" href="/product-category/{{ $product->product_category->alias }}" title="{{ $product->product_category->name }}">{{ $product->product_category->name }}</a>
    					</li>
    					<li class="separator"></li>
    					<li class="item-current item-2330">
    						<span class="bread-current bread-2330" title="{{ $product->title }}">{{ $product->title }}</span>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="shop-section single-shop">
	    <div class="container">
	        <div class="row">
	            <div class=" col-lg-8  single-shop-content">
	                <div class="woocommerce-notices-wrapper"></div>
	                <div itemscope="" id="product-2330" class="post-2330 product type-product status-publish has-post-thumbnail product_cat-diesel-engine-oil product_cat-sinopec-tulux-t-series grow-content-body first instock shipping-taxable product-type-simple">
	                    <div class="ac-detail-shop">
	                        <div class="row">
	                            <div class="col-md-6 col-sm-6">
	                                <div class="img-holder">
	                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
	                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
	                                        <figure class="woocommerce-product-gallery__wrapper">
	                                            <div data-thumb="/wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L-100x100.jpeg" data-thumb-alt="" class="woocommerce-product-gallery__image">
	                                                <a href="{{ url(!empty($product->avatar) ? $product->avatar : '') }}">
	                                                    <img width="300" height="300" src="{{ url(!empty($product->avatar) ? $product->avatar : '') }}" class="wp-post-image" title="{{ $product->title }}">
	                                                </a>
	                                            </div>
	                                        </figure>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="summary entry-summary">
	                                <div class="col-md-6 col-sm-6">
	                                    <div class="content">
	                                        <h1 class="product_title entry-title">{{ $product->title }}</h1>
	                                        <div class="review-box"></div>
	                                        <h1>
	                                            <p class="price"></p>
	                                        </h1>
	                                        <div class="text">
	                                            <div class="woocommerce-product-details__short-description">
	                                                <div>{!! $product->content !!}</div>
	                                                <p>
	                                                    <a class="aut-cr-btn" href="{{ url('contact-us') }}" target="_blank" rel="noopener noreferrer">Contact Us</a>
	                                                </p>
	                                                <div id="dpsp-content-bottom" class="dpsp-content-wrapper dpsp-shape-rounded dpsp-size-medium dpsp-has-spacing dpsp-hide-on-mobile dpsp-show-total-share-count dpsp-show-total-share-count-after dpsp-button-style-1" style="min-height:40px;position:relative">
	                                                    <div class="dpsp-total-share-wrapper" style="position:absolute;right:0">
	                                                        <span class="dpsp-icon-total-share">
	                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 26 32">
	                                                                <path d="M20.8 20.8q1.984 0 3.392 1.376t1.408 3.424q0 1.984-1.408 3.392t-3.392 1.408-3.392-1.408-1.408-3.392q0-0.192 0.032-0.448t0.032-0.384l-8.32-4.992q-1.344 1.024-2.944 1.024-1.984 0-3.392-1.408t-1.408-3.392 1.408-3.392 3.392-1.408q1.728 0 2.944 0.96l8.32-4.992q0-0.128-0.032-0.384t-0.032-0.384q0-1.984 1.408-3.392t3.392-1.408 3.392 1.376 1.408 3.424q0 1.984-1.408 3.392t-3.392 1.408q-1.664 0-2.88-1.024l-8.384 4.992q0.064 0.256 0.064 0.832 0 0.512-0.064 0.768l8.384 4.992q1.152-0.96 2.88-0.96z"></path>
	                                                            </svg>
	                                                        </span>
	                                                        <span class="dpsp-total-share-count">0</span>
	                                                        <span>shares</span>
	                                                    </div>
	                                                    <ul class="dpsp-networks-btns-wrapper dpsp-networks-btns-share dpsp-networks-btns-content dpsp-column-3 dpsp-has-button-icon-animation" style="padding:0;margin:0;list-style-type:none">
	                                                        <li class="dpsp-network-list-item dpsp-network-list-item-facebook" style="float:left">
	                                                            <a rel="nofollow noopener" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.iol.lk%2Fproduct%2Fsinopec-tulux-t-400-ch-4-sl-sae-15w-40-heavy-duty-diesel-engine-oil%2F&amp;t=Sinopec%20Tulux%20T%20400%20CH-4%20%2F%20SL%20SAE%2015W-40%20Heavy%20Duty%20Diesel%20Engine%20Oil" class="dpsp-network-btn dpsp-facebook dpsp-first dpsp-has-label" target="_blank" aria-label="Share on Facebook" title="Share on Facebook" style="font-size:14px;padding:0rem;max-height:40px">
	                                                                <span class="dpsp-network-icon ">
	                                                                    <span class="dpsp-network-icon-inner">
	                                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 18 32">
	                                                                            <path d="M17.12 0.224v4.704h-2.784q-1.536 0-2.080 0.64t-0.544 1.92v3.392h5.248l-0.704 5.28h-4.544v13.568h-5.472v-13.568h-4.544v-5.28h4.544v-3.904q0-3.328 1.856-5.152t4.96-1.824q2.624 0 4.064 0.224z"></path>
	                                                                        </svg>
	                                                                    </span>
	                                                                </span>
	                                                                <span class="dpsp-network-label">Share</span>
	                                                            </a>
	                                                        </li>
	                                                        <li class="dpsp-network-list-item dpsp-network-list-item-twitter" style="float:left">
	                                                            <a rel="nofollow noopener" href="https://twitter.com/intent/tweet?text=Sinopec%20Tulux%20T%20400%20CH-4%20%2F%20SL%20SAE%2015W-40%20Heavy%20Duty%20Diesel%20Engine%20Oil&amp;url=https%3A%2F%2Fwww.iol.lk%2Fproduct%2Fsinopec-tulux-t-400-ch-4-sl-sae-15w-40-heavy-duty-diesel-engine-oil%2F" class="dpsp-network-btn dpsp-twitter dpsp-has-label" target="_blank" aria-label="Share on Twitter" title="Share on Twitter" style="font-size:14px;padding:0rem;max-height:40px">
	                                                                <span class="dpsp-network-icon ">
	                                                                    <span class="dpsp-network-icon-inner">
	                                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 30 32">
	                                                                            <path d="M28.928 7.296q-1.184 1.728-2.88 2.976 0 0.256 0 0.736 0 2.336-0.672 4.64t-2.048 4.448-3.296 3.744-4.608 2.624-5.792 0.96q-4.832 0-8.832-2.592 0.608 0.064 1.376 0.064 4.032 0 7.168-2.464-1.888-0.032-3.36-1.152t-2.048-2.848q0.608 0.096 1.088 0.096 0.768 0 1.536-0.192-2.016-0.416-3.328-1.984t-1.312-3.68v-0.064q1.216 0.672 2.624 0.736-1.184-0.8-1.888-2.048t-0.704-2.752q0-1.568 0.8-2.912 2.176 2.656 5.248 4.256t6.656 1.76q-0.16-0.672-0.16-1.312 0-2.4 1.696-4.064t4.064-1.696q2.528 0 4.224 1.824 1.952-0.384 3.68-1.408-0.672 2.048-2.56 3.2 1.664-0.192 3.328-0.896z"></path>
	                                                                        </svg>
	                                                                    </span>
	                                                                </span>
	                                                                <span class="dpsp-network-label">Tweet</span>
	                                                            </a>
	                                                        </li>
	                                                        <li class="dpsp-network-list-item dpsp-network-list-item-pinterest" style="float:left">
	                                                            <button rel="nofollow noopener" data-href="#" class="dpsp-network-btn dpsp-pinterest dpsp-last dpsp-has-label" target="_blank" aria-label="Save to Pinterest" title="Save to Pinterest" style="font-size:14px;padding:0rem;max-height:40px">
	                                                                <span class="dpsp-network-icon ">
	                                                                    <span class="dpsp-network-icon-inner">
	                                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 23 32">
	                                                                            <path d="M0 10.656q0-1.92 0.672-3.616t1.856-2.976 2.72-2.208 3.296-1.408 3.616-0.448q2.816 0 5.248 1.184t3.936 3.456 1.504 5.12q0 1.728-0.32 3.36t-1.088 3.168-1.792 2.656-2.56 1.856-3.392 0.672q-1.216 0-2.4-0.576t-1.728-1.568q-0.16 0.704-0.48 2.016t-0.448 1.696-0.352 1.28-0.48 1.248-0.544 1.12-0.832 1.408-1.12 1.536l-0.224 0.096-0.16-0.192q-0.288-2.816-0.288-3.36 0-1.632 0.384-3.68t1.184-5.152 0.928-3.616q-0.576-1.152-0.576-3.008 0-1.504 0.928-2.784t2.368-1.312q1.088 0 1.696 0.736t0.608 1.824q0 1.184-0.768 3.392t-0.8 3.36q0 1.12 0.8 1.856t1.952 0.736q0.992 0 1.824-0.448t1.408-1.216 0.992-1.696 0.672-1.952 0.352-1.984 0.128-1.792q0-3.072-1.952-4.8t-5.12-1.728q-3.552 0-5.952 2.304t-2.4 5.856q0 0.8 0.224 1.536t0.48 1.152 0.48 0.832 0.224 0.544q0 0.48-0.256 1.28t-0.672 0.8q-0.032 0-0.288-0.032-0.928-0.288-1.632-0.992t-1.088-1.696-0.576-1.92-0.192-1.92z"></path>
	                                                                        </svg>
	                                                                    </span>
	                                                                </span>
	                                                                <span class="dpsp-network-label">Pin</span>
	                                                            </button>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="add-to-cart"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="related products shop-page-content">
	                        <div class="sec-title text-left">
	                            <h1>Related Products</h1>
	                            <span class="decor"></span>
	                        </div>
	                        <div class="products clearfix">
	                            <div class="row1 clearfix">
	                               	@foreach($related_products as $pr)
	                                <div class="first1 col-md-3 col-sm-6 col-xs-12 post-776 product type-product status-publish has-post-thumbnail product_cat-diesel-engine-oil product_cat-sinopec-tulux-t-series  instock shipping-taxable product-type-simple">
	                                    <div class="single-shop-item">
	                                        <div class="img-box">
	                                            <img width="300" height="300" src="{{ url(!empty($pr->avatar) ? $pr->avatar :'') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" >
	                                            <a href="/products/{{ $pr->alias }}" class="pr-more-btn">View More</a>
	                                        </div>
	                                        <div class="content-box">
	                                            <div class="top-box clearfix">
	                                                <div class="title-box pull-left">
	                                                    <a href="/products/{{ $pr->alias }}">
	                                                        <h3>{{ $pr->title }}</h3>
	                                                    </a>
	                                                    <ul class="price list-inline">
	                                                        <li></li>
	                                                    </ul>
	                                                </div>
	                                                <div class="review-box pull-right"></div>
	                                            </div>
	                                            <a href="/products/{{ $pr->alias }}" class="aut-cr-btn">add to cart</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                @endforeach
	                            </div>
	                        </div>
	                    </div>
	                    <meta itemprop="url" content="/product/{{ $product->alias }}">
	                </div>
	            </div>
	            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
	                <div class="sidebar">
	                    <div id="nav_menu-3" class="widget single-sidebar widget_nav_menu">
	                        <div class="sec-title text-left">
	                            <h3>PRODUCT CATEGORIES</h3>
	                            <span class="decor"></span>
	                        </div>
	                        <div class="menu-product-categories-menu-container">
	                            <ul id="menu-product-categories-menu" class="menu">
	                                @foreach($product_categories as $cat)
	                                <li id="menu-item-1027" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1027">
	                                    <a href="/product-category/{{ $cat->alias }}">{{ $cat->name }}</a>
	                                </li>
	                                @endforeach
	                            </ul>
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