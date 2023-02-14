@extends('site.layouts.home')

@section('main')
@include('site.homepage.index_css')
<div class="page-wrapper">
    @include('site.includes.header')
    @include('site.homepage.slider')

    @include('site.homepage.introduce')
    @include('site.homepage.our_products')
    @include('site.homepage.lasted_news')
    @include('site.homepage.recent_products')

    @include('site.includes.footer')
</div>
@endsection