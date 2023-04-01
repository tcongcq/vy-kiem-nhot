@extends('site.layouts.home')

@section('main')
@include('site.products.product-category-css')
<?php 
    $locale = App::getLocale();
    $products = App\Models\ProductCategory::where('language', $locale)
                ->where('is_show', 1)
                ->orderBy('order_num')
                ->get();
?>
<div class="page-wrapper">
    @include('site.includes.header')

    <section class="breadcrumb-area" style="background-image: url('{{ url(!empty($category->image) ? $category->image : '/theme/img/resources/breadcrumb-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>{{ $category->name }}</h1>
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
                        <li class="item-cat item-custom-post-type-product">
                            <a class="bread-cat bread-custom-post-type-product" href="/products" title="{{ __('locale.menu.products') }}">{{ __('locale.menu.products') }}</a>
                        </li>
                        <li class="separator"></li>
                        <li class="item-current item-archive">
                            <span class="bread-current bread-archive">{{ $category->name }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-section with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row meta-info">
                        <div class="col-md-12">
                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="term-description">
                            <p>{!! $category->description !!}</p>
                        </div>
                        <div class="products clearfix">
                            @foreach($category->products as $product)
                            <div class="first1 col-md-3 col-sm-6 col-xs-12 post-2330 product type-product status-publish has-post-thumbnail product_cat-diesel-engine-oil product_cat-sinopec-tulux-t-series  instock shipping-taxable product-type-simple">
                                <div class="single-shop-item">
                                    <div class="img-box">
                                        <img width="300" height="300" src="{{ url(!empty($product->avatar) ? $product->avatar : '') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}">
                                        <a href="/products/{{ $product->alias }}" class="pr-more-btn">View More</a>
                                    </div>
                                    <div class="content-box">
                                        <div class="top-box clearfix">
                                            <div class="title-box pull-left">
                                                <a href="/products/sinopec-tulux-t-400-ch-4-sl-sae-15w-40-heavy-duty-diesel-engine-oil/">
                                                    <h3>{{ $product->title }}</h3>
                                                </a>
                                            </div>
                                            <div class="review-box pull-right"></div>
                                        </div>
                                        <a href="/products/{{ $product->alias }}" class="aut-cr-btn">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.includes.footer')
</div>
@endsection