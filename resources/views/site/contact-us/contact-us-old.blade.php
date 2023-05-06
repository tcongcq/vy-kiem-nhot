@extends('site.layouts.home')

@section('main')
<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
@include('site.contact-us.contact-us-css')
<div class="page-wrapper">
    @include('site.includes.header')
    
    <section class="breadcrumb-area" style="background-image:url('/wp-content/uploads/2018/08/contact-us-banner.jpg');">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="breadcrumbs text-center">
    					<h1>{{ __('locale.contact-us.get-in-touch-with-us') }}</h1>
    					<h4></h4>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @foreach($contact_infos as $key => $info)

	@if($key == 0 || $key % 3 == 0)
    <div class="vc_row wpb_row vc_row-fluid">
	    <div class="container">
	        <div class="contact-sale wpb_column vc_column_container vc_col-sm-12">
	            <div class="vc_column-inner vc_custom_1537259019394">
	                <div class="wpb_wrapper">
	                    <div class="vc_empty_space" style="height: 32px">
	                        <span class="vc_empty_space_inner"></span>
	                    </div>
	                    <div class="vc_row wpb_row vc_inner vc_row-fluid contact-details">
	@endif
	                    	<div class="contact-info contact-main wpb_column vc_column_container {{ $key != 3 ? 'vc_col-sm-4' : '' }}">
	                            <div class="vc_column-inner">
	                                <div class="wpb_wrapper">
	                                    <div class="wpb_text_column wpb_content_element ">
	                                        <div class="wpb_wrapper">
	                                            <h3 style="text-align: left;">
	                                                <span style="color: #000000;">{{ $info->title }}</span>
	                                            </h3>
	                                        </div>
	                                    </div>
	                                    <div class="vc_empty_space" style="height: 20px">
	                                        <span class="vc_empty_space_inner"></span>
	                                    </div>
	                                    <div class="wpb_text_column wpb_content_element ">
	                                        <div class="wpb_wrapper">
	                                            <h4 style="text-align: center;">{{ $info->contact_name }}</h4>
	                                            <p>
	                                                <strong>{{ $info->position }}</strong>
	                                                <br>
	                                                <span style="color: #ff0000;">{{ $info->contact_email }}</span>
	                                                <br>
	                                                <b class="flaticon-telephone"></b>
	                                                <a href="tel:{{ preg_replace('/\s+/', '', $info->contact_phone) }}">{{ $info->contact_phone }}</a>
	                                            </p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	@if(($key+1) % 3 == 0 || ($key+1) == count($contact_infos))
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
    @endif
    @endforeach

	<div class="vc_row wpb_row vc_row-fluid contact-us">
	    <div class="wpb_column vc_column_container vc_col-sm-12">
	        <div class="vc_column-inner">
	            <div class="wpb_wrapper">
	                <section class="contact-area">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="getin-touch">
	                                    <div class="sec-title text-left">
	                                        <h1>{{ $config['contact_form_title'] }}</h1>
	                                        <span class="decor"></span>
	                                    </div>
	                                    <p>{!! $config['contact_form_description'] !!}</p>
	                                    <ul class="contact-info">
	                                        <li>
	                                            <div class="icon-holder">
	                                                <span class="flaticon-map"></span>
	                                            </div>
	                                            <div class="content">
	                                                <h4>{{ $config['footer_address_title'] }}</h4>
	                                                <p>{!! $config['footer_address'] !!}</p>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="icon-holder">
	                                                <span class="flaticon-note"></span>
	                                            </div>
	                                            <div class="content">
	                                                <h4>{{ $config['footer_email_title'] }}</h4>
	                                                <p>{!! $config['footer_email'] !!}</p>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="icon-holder">
	                                                <span class="flaticon-telephone"></span>
	                                            </div>
	                                            <div class="content">
	                                                <h4>{{ $config['footer_phone_title'] }}</h4>
	                                                <p>{!! $config['footer_phone'] !!}</p>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="col-md-8">
	                                <div class="contact-form">
	                                    <div class="sec-title text-left">
	                                        <h1>{{ __('locale.contact-us.message-us') }}</h1>
	                                        <span class="decor"></span>
	                                    </div>
	                                    <div role="form" class="wpcf7" id="wpcf7-f597-p598-o1" lang="en-US" dir="ltr">
	                                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
	                                        <form action="/get-in-touch/#wpcf7-f597-p598-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
	                                            <div class="row">
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-name">
	                                                        <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('locale.contact-us.your-name') }}">
	                                                        <span class="wpcf7-not-valid-tip" role="alert" aria-hidden="true">The field is required.</span>
	                                                    </span>
	                                                </div>
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-email">
	                                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="{{ __('locale.contact-us.email') }}">
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="row">
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-phone">
	                                                        <input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('locale.contact-us.phone') }}">
	                                                    </span>
	                                                </div>
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-subject">
	                                                        <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('locale.contact-us.subject') }}">
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="row">
	                                                <div class="col-md-12">
	                                                    <span class="wpcf7-form-control-wrap your-message">
	                                                        <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="{{ __('locale.contact-us.message') }}"></textarea>
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="row">
	                                                <div class="col-md-12">
	                                                    <input type="submit" value="{{ __('locale.contact-us.send-message') }}" class="wpcf7-form-control wpcf7-submit">
	                                                    <span class="ajax-loader"></span>
	                                                </div>
	                                            </div>
	                                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
	                                        </form>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </section>
	            </div>
	        </div>
	    </div>
	</div>

	@if(1==0)
	<div class="vc_row wpb_row vc_row-fluid">
	    <div class="wpb_column vc_column_container vc_col-sm-12">
	        <div class="vc_column-inner">
	            <div class="wpb_wrapper">
	                <section class="apply-for-job-area">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                <h2>Our Sales Team</h2>
	                            </div>
	                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                <a class="aut-cr-btn" href="/contact/our-sales-team/">VIEW</a>
	                            </div>
	                        </div>
	                    </div>
	                </section>
	            </div>
	        </div>
	    </div>
	</div>
	@endif

    @include('site.includes.footer')
</div>
@endsection