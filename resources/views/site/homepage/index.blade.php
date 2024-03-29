@extends('site.layouts.home')

@section('main')
@include('site.homepage.index_css')
<div class="page-wrapper">
    @include('site.includes.header')
    @include('site.homepage.slider')

    @include('site.homepage.introduce')

    @include('site.homepage.our_products')
    
    @include('site.homepage.about_us')

    @include('site.includes.footer')
</div>
@endsection