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
	                                        <form action="#" method="post" id="contact-form" class="wpcf7-form init" novalidate="novalidate">
	                                            <div class="row">
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-name">
	                                                        <input type="text" name="contact_name" id="contact_name" value="" size="40" class="wpcf7-form-control wpcf7-text" required placeholder="{{ __('locale.contact-us.your-name') }} (*)">
	                                                    </span>
	                                                </div>
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-email">
	                                                        <input type="email" name="contact_email" id="contact_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="{{ __('locale.contact-us.email') }}">
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="row">
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-phone">
	                                                        <input type="text" name="contact_phone" id="contact_phone" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="{{ __('locale.contact-us.phone') }} (*)">
	                                                    </span>
	                                                </div>
	                                                <div class="col-md-6">
	                                                    <span class="wpcf7-form-control-wrap your-subject">
	                                                        <input type="text" name="subject" id="subject" value="" size="40" class="wpcf7-form-control wpcf7-text " placeholder="{{ __('locale.contact-us.subject') }}">
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="row">
	                                                <div class="col-md-12">
	                                                    <span class="wpcf7-form-control-wrap your-message">
	                                                        <textarea name="message" id="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="{{ __('locale.contact-us.message') }}"></textarea>
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

@section('footer-script')
<script type="text/javascript">
let loading = false;
$('#contact-form').submit(function (e) {
    e.preventDefault();
    let form = $(e.target);
    formData = form.serializeArray();
    contact = {_token: '{{ csrf_token() }}'};
    formData.forEach((e, i)=>{
    	contact[e.name] = e.value;
    });
    if (!contact.contact_name || !contact.contact_phone){
    	alert('Hãy nhập tên và số điện thoại của bạn!');
    	return false;
    }
    if (loading) return false;
    loading = true;
    $('#contact-form .ajax-loader').addClass('is-active');
    $.ajax({
	    url: "{{ url('contact-us') }}",
	    type: "post",
	    data: contact,
	    success: function (data) {
	        alert(data.message);
	        loading = false;
    		$('#contact-form .ajax-loader').removeClass('is-active');
    		if (data.status == 'success')
    			window.location.replace("{{ url('/') }}");
	    }
	});
});
</script>

@endsection