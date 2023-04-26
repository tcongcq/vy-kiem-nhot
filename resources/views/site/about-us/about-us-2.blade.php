@extends('site.layouts.home')

@section('main')
<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<link rel="stylesheet" type="text/css" href="{{ url('theme/css/7ef1d5e5b03e39d39c6c3324beba6906.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('theme/css/styles-l.css') }}">
<style type="text/css">
li{
    list-style: disc !important;
}
.widget ul>li {
    border-bottom: 0px !important;
}
</style>
<div class="page-wrapper">
    @include('site.includes.header')
    
    <section style="margin-top: 147px !important;">
    </section>
    <img class="img clazyload clazyloaded" src="{{ url('theme/includes/About_0.jpg') }}" alt="" draggable="false" style="display: block;">
    <div class="container">
        @include('site.about-us.about-us-content')
    </div>

    @include('site.includes.footer')
</div>


@endsection