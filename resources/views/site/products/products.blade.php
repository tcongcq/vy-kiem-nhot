@extends('site.layouts.home')

@section('main')
<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
@include('site.products.products-css')
<div class="page-wrapper">
    @include('site.includes.header')
    <section class="breadcrumb-area" style="background-image:url('/wp-content/uploads/2018/08/prodct-banner-img.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>{{ __('locale.menu.products') }}</h1>
                        <h4></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="vc_row wpb_row vc_row-fluid services-single-area services-single-content">
        <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>{!! $config['product_content'] !!}</p>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            @foreach($products as $cat)
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                            <div class="wpb_wrapper">
                                                <a href="/product-category/{{ $cat->alias }}" class="pcat">
                                                    <img width="370" height="380" src="{{ url(!empty($cat->image) ? $cat->image : '') }}">
                                                    <span class="title">
                                                        <h3> {{ $cat->name }} <span class="go-top-icon">
                                                                <span class="flaticon-right-arrow"></span>
                                                            </span>
                                                        </h3>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.includes.footer')
</div>
@endsection