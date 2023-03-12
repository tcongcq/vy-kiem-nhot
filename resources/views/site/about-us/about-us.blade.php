@extends('site.layouts.home')

@section('main')
<style type="text/css" id="wp-custom-css">.term-automatic-transmission-fluid .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/automatic-transmission-banner.jpg) !important;
}
.term-sinopec-tulux-series .breadcrumb-area, .term-sinopec-tulux-t-series .breadcrumb-area {
    background: url(/wp-content/uploads/2018/08/diesel-banner.jpg) !important;
    background-size: cover !important;
}
.term-four-stroke-motor-cycle-engine-oil .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/4-stroke-motocycle-banner.jpg) !important;
    background-size: cover;
}
.term-general-purpose-automotive-gear-oils .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/general-purpose-automotive-gear-oil-banner.jpg) !important;
    background-size: cover;
}
.term-greases .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/grease-banner.jpg) !important;
    background-size: cover;
}
.top-box.clearfix {
    min-height: 124px;
}
.term-industrial-lubricants .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/industrial-banner.jpg) !important;
    background-size: cover;
}
.term-marine-engine-oils .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/marine-banner.jpg)!important;
    background-size: cover;
}
.term-insulated-transformer-oil .breadcrumb-area {
    background-image: url(//wp-content/uploads/2018/08/transformer-banner.jpg) !important;
    background-size: cover;
}
.term-passenger-car-motor-oils .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/passenger-vehicle-banner.jpg) !important;
    background-size: cover;
}
.term-tractor-oils .breadcrumb-area {
    background-image: url(/wp-content/uploads/2022/10/NHOriginal-copy.jpg) !important;
    background-size: cover;
}
.term-diesel-engine-oil  .breadcrumb-area {
    background-image: url(/wp-content/uploads/2018/08/diesel-banner.jpg) !important;
    background-size: cover;
}
.term-sinopec-tulux-series, .term-sinopec-tulux-t-series {
    background: inherit !important;
}

@media screen and (min-width:180px) and (max-width:992px){
    .call-to-action-area .box h2 {
    text-align: center  !important;
    padding-right: 0 !important;
    font-size: 20px;
}
    .call-to-action-area .box{
        height: 74px;   
    }           
.call-to-action-area {
    padding-top: 0px;
}   
.call-to-action-area .box h2 {
    top: -44px !important;
}   
.call-to-action-area .box {
    width: 100%;
}   
}</style><style></style><style type="text/css" data-type="vc_custom-css">.hm-product .woocommerce.columns-3 {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.hm-product .single-shop-item {
    background: #f6f6f6;
    text-align: center;
    box-shadow: 0 0 10px -2px rgba(0,0,0,0.2);
}

.hm-product .single-shop-item .img-box {
    border: none;
    padding: 0;
}

.hm-product .single-shop-item .img-box img {
    width: 100%;
}

.hm-product .single-shop-item a h3 {
    font-size: 13px;
    line-height: 24px;
    min-height: 20px;
    padding: 0 8px;
}

@media (max-width: 640px) {
    #rev_slider_2_1 .tp-caption {
        display: block !important;
    }
    
    .img-holder img{
        width:100%
    }
}

.home-service .go-top-icon{
    display:none;
}

.single-blog-post ul{
    display:none;
}

@media (max-width: 9920px) {
    .img-holder img{
        width:100%
    }
}

.sec-title span.decor::before {
    background: #fff none repeat scroll 0 0;
}

.sec-title span.decor::after {
    background: #fff none repeat scroll 0 0;
}

/* best service transparent */

body section {
    background: transparent;
}

.best-service-area {
    background: transparent;
}

.best-service-area .top-bg::before{
    background: transparent;
}

.best-service-area .top-bg::after {
    background: transparent;
}

.best-service-area {
    background: transparent;
}

.best-service-area .top-bg {
    background: transparent;
}

.call-to-action-area .box h2{
    text-align:right;
    padding-right:30px;
}
.call-to-action-area .box a{
    left: 0px !important;
}

.single-blog-post .content-box .content h3 {
    color: #e2001a !important
}

.hm-product .single-shop-item {
    background: #e2001a;
    text-align: center;
    box-shadow: 0px 0px 3px 2px rgb(226, 0, 40);
}

.hm-product .single-shop-item a h3 {
    font-size: 15px;
    text-transform: uppercase !important;
    text-align: center;
    color: #fff !important;

}

.single-item p{
    text-align:left !important;
}

.call-to-action-area .box a {
    left: 0px !important;
    border-radius: 12px !important;
}

.vc_btn3-inline a , .wpcf7-submit, .aut-cr-btn, .vc_btn3, a.pr-more-btn{
    border-radius: 8px !important;
}

.best-service-area .single-item .title .icon-holder{
    display:none;
}

.best-service-area .single-item .title {
    text-align:center;
}

.best-service-area .single-item .title h3{
    padding: 10px 0;
}



.stricky .header-lower.navbar .navbar-nav > li.active > a{
    color: #fff;
}

.stricky .header-lower.navbar .navbar-nav > li > a {
    color: #fff;
}

.stricky .header-contact-info ul li {
    color: #fff;
    text-shadow: 1px 1px 1px #000;
}

.stricky .header-contact-info a {
    color: #fff;
    text-shadow: 1px 1px 1px #000;
}

.stricky-fixed .header-lower.navbar .navbar-nav > li > a {
    color: #000;
}

.stricky-fixed .header-lower.navbar .navbar-nav > li.active > a[style]{
    color: #000 !important;
}

.main-header.stricky {
    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.7) 1%, rgba(0, 0, 0, 0) 100%) !important;
    background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.7) 1%, rgba(0, 0, 0, 0) 100%)  !important;
    background-image: linear-gradient(top, rgba(0, 0, 0, 0.7) 1%, rgba(0, 0, 0, 0) 100%) !important;
}

.main-header.stricky-fixed {
    background: rgba(255, 255, 255, .90) !important;
}

a.pcat span.title,
a.pcat:link span.title,
a.pcat:visited span.title {
    position: relative;
    background: #eeeeee;
    display: block;
    color: #797979;
}

a.pcat:active span.title,
a.pcat:hover span.title{
    background-color: #ba0913;
    color: #fff;
}

.pcat .go-top-icon .flaticon-right-arrow {
    color: #fff !important;
    top: 50%;
    position: absolute;
    margin-top: -11px !important;
    left: 15px;
}

a.pcat .title h3 {
    font-size: 12px;
    font-weight: bold;
}

.breadcrumb-bottom-area{
    display:none !important;
}

.pcat img {
    width: 100%;
}
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1535614439582{margin-top: 80px !important;margin-bottom: 60px !important;}
.vc_custom_1536665432782{padding-top: 0px !important;}
.stricky .header-contact-info ul li {
    color: #fff;
    text-shadow: 1px 1px 1px #000;
}
.header-contact-info ul li {
    color: #474747;
    display: inline-block;
    font-size: 13px;
    font-weight: 500;
    margin-right: 25px;
    text-transform: none;
}
.about-us p {
    font-size: 18px;
    line-height: 30px;
}
.vc_custom_1533892029250 {
    margin-top: 50px !important;
    margin-bottom: 60px !important;
}
.vc_color-chino.vc_message_box {
    color: #fff;
    border-color: #e5ded2;
    background-color: #e2001a;
    padding: 1em;
}
.vc_message_box h4 {
    font-size: 16px;
    line-height: 25px;
}
.page-id-103 .vc_message_box {
    padding: 15px 20px;
}
.stricky .lang-group .lang-name{
    color: #fff;
}
</style>
<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<div class="page-wrapper">
    @include('site.includes.header')
    
    <section class="breadcrumb-area" style="background-image:url('/wp-content/uploads/2018/08/about-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>{{ __('locale.menu.about-us') }}</h1>
                        <h4></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1533892029250 vc_row-o-content-middle vc_row-flex">
        <div class="container">
            <div class="about-us wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 30px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>
                                                    {!! $config['about_us_content'] !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h3>{{ __('locale.about-us.vision') }}</h3>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="vc_message_box vc_message_box-standard vc_message_box-rounded vc_color-chino">
                                            <h4 style="text-align: left;">{!! $config['about_us_vision'] !!}</h4>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h3>{{ __('locale.about-us.mission') }}</h3>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="vc_message_box vc_message_box-standard vc_message_box-rounded vc_color-chino">
                                            <h4 style="text-align: left;">{!! $config['about_us_mission'] !!}</h4>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 30px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site.includes.footer')
</div>


@endsection