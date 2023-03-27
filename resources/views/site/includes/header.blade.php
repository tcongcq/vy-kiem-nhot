<?php 
    $locale = App::getLocale();
    $products = App\Models\ProductCategory::where('language', $locale)
                ->where('is_show', 1)
                ->orderBy('order_num')
                ->get();
?>
<style type="text/css">
.header-contact-info ul li, .header-contact-info a {
    text-transform: none;
}
.header-contact-info ul li i.flaticon-interface-1::before {
    top: 1px;
}
.stricky-fixed .header-lower.navbar .navbar-nav > li.active > a, .stricky-fixed .header-lower.navbar .navbar-nav > li:hover > a {
    color: #fff !important;
    background: #e2001a;
}
@media (min-width: 641px){
    .header-lower.navbar .navbar-nav>li:last-child>a {
        padding-right: 15px !important;
    }
}
.lang-group .lang-name{
    color: #fff;
    cursor: pointer;
    user-select: none;
}
.lang-group .dropdown-menu{
    padding: 0;
    border-radius: 0;
}
.lang-group .dropdown-menu>li>a{
    cursor: pointer;
}
.lang-group .dropdown-menu>.active>a, .lang-group .dropdown-menu>.active>a:focus, .lang-group .dropdown-menu>.active>a:hover{
    background: #e2001a !important;
}
.header-top .header-top-content {
    border-bottom: 0px;
    padding-bottom: 0px;
}
.header-lower.navbar .container {
    border-top: 0px;
}
.main-header.stricky:not(.stricky-fixed) {
    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 1) 1%, rgba(0, 0, 0, 0) 100%) !important;
}
.header-contact-info ul li, .header-contact-info a {
    color: #fff;
}
</style>
<script type="text/javascript">
function change_lang(lang){
    if (lang != '{{ $locale }}')
        window.location.replace("{{ url('lang/change?lang=') }}"+lang);
}
</script>
<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<header class="main-header stricky">
    <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                        <div class="header-contact-info">
                            <ul>
                                @if($config['show_header_phone'])
                                <li>
                                    <i class="flaticon-telephone"></i> {!! $config['header_phone_title'] !!} <a href="tel:{{ preg_replace('/\s+/', '', $config['header_phone']) }}">{!! $config['header_phone'] !!}</a>
                                </li>
                                @endif
                                @if($config['show_header_email'])
                                <li>
                                    <i class="flaticon-interface-1">{!! $config['header_email_title'] !!}</i>
                                    <a href="mailto:info@interocean.lk">{!! $config['header_email'] !!}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 text-right">
                        <div class="btn-group lang-group" role="group">
                            <div class="lang-name" data-toggle="dropdown">
                                {{ $locale == 'vi' ? 'Tiếng Việt' : 'English' }}
                                <span class="caret"></span>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="{{ $locale == 'vi' ? 'active' : '' }}">
                                    <a onClick="change_lang('vi')">Tiếng Việt</a>
                                </li>
                                <li class="{{ $locale == 'en' ? 'active' : '' }}">
                                    <a onClick="change_lang('en')">English</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="header-lower navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/wp-content/uploads/2018/08/sinopec-logo.png" alt="" title="Awesome Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="menu-item-741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-741 {{ uri() == '' ? 'active' : ''}}">
                        <a title="{{ __('locale.menu.home') }}" href="{{ url('/')  }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">{{ __('locale.menu.home') }}
                        </a>
                    </li>
                    <li id="menu-item-742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742 {{ uri() == 'about-us' ? 'active' : ''}}">
                        <a title="{{ __('locale.menu.about-us') }}" href="{{ url('about-us') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">{{ __('locale.menu.about-us') }}
                        </a>
                    </li>
                    <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-930 dropdown {{ (uri() == 'products' || uri() == 'product-category') ? 'active' : ''}}">
                        <a title="{{ __('locale.menu.products') }}" href="{{ url('products') }}" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">{{ __('locale.menu.products') }}
                        </a>
                        <ul role="menu" class="dropdown-menu ">
                            @foreach($products as $cat)
                            <li id="menu-item-977" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-977">
                                <a title="{{ $cat->name }}" href="/product-category/{{ $cat->alias }}">
                                    {{ $cat->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="dropdown-btn"></div>
                    </li>
                    <li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-954 {{ uri() == 'news' ? 'active' : ''}}">
                        <a title="{{ __('locale.menu.news') }}" href="{{ url('news') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">{{ __('locale.menu.news') }}
                        </a>
                    </li>
                    <li id="menu-item-939" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939 {{ uri() == 'contact-us' ? 'active' : ''}}">
                        <a title="{{ __('locale.menu.contact') }}" href="{{ url('contact-us') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">{{ __('locale.menu.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>