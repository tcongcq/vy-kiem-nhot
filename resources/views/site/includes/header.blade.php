<style type="text/css">
.header-contact-info ul li, .header-contact-info a {
    text-transform: none;
}
.header-contact-info ul li i.flaticon-interface-1::before {
    top: 1px;
}
</style>
<header class="main-header stricky">
    <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                        <div class="header-contact-info">
                            <ul>
                                <li>
                                    <i class="flaticon-telephone"></i> Customer Support <a href="tel:+94114343747">+94 11 434 3747</a>
                                </li>
                                <li>
                                    <i class="flaticon-interface-1"></i>
                                    <a href="mailto:info@interocean.lk">info@interocean.lk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12"></div>
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
                        <a title="Home" href="{{ url('/')  }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Home <span class="decor"></span>
                        </a>
                    </li>
                    <li id="menu-item-742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742 {{ uri() == 'about-us' ? 'active' : ''}}">
                        <a title="About Us" href="{{ url('about-us') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">About Us <span class="decor"></span>
                        </a>
                    </li>
                    <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-930 dropdown {{ (uri() == 'products' || uri() == 'product-category') ? 'active' : ''}}">
                        <a title="Products" href="{{ url('products') }}" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Products <span class="decor"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu ">
                            <li id="menu-item-977" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-977">
                                <a title="Automatic Transmission Fluid" href="/product-category/automatic-transmission-fluid/">Automatic Transmission Fluid <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-978" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-978">
                                <a title="Diesel Engine Oil" href="/product-category/diesel-engine-oil/">Diesel Engine Oil <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-979" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-979">
                                <a title="Four Stroke Motor Cycle Engine Oil" href="/product-category/four-stroke-motor-cycle-engine-oil/">Four Stroke Motor Cycle Engine Oil <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-980" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-980">
                                <a title="General Purpose Automotive Gear Oils" href="/product-category/general-purpose-automotive-gear-oils/">General Purpose Automotive Gear Oils <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-981" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-981">
                                <a title="Greases" href="/product-category/greases/">Greases <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-982" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-982">
                                <a title="Industrial Lubricants" href="/product-category/industrial-lubricants/">Industrial Lubricants <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-983" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-983">
                                <a title="Marine Engine Oils" href="/product-category/marine-engine-oils/">Marine Engine Oils <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-984" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-984">
                                <a title="Passenger Car Motor Oils" href="/product-category/passenger-car-motor-oils/">Passenger Car Motor Oils <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-985" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-985">
                                <a title="Sinopec Insulated Transformer Oil" href="/product-category/insulated-transformer-oil/">Sinopec Insulated Transformer Oil <span class="decor"></span>
                                </a>
                            </li>
                            <li id="menu-item-2354" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2354">
                                <a title="Tractor Oils" href="/product-category/tractor-oils/">Tractor Oils <span class="decor"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-btn"></div>
                    </li>
                    <li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-954 {{ uri() == 'news' ? 'active' : ''}}">
                        <a title="News" href="{{ url('news') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">News <span class="decor"></span>
                        </a>
                    </li>
                    <li id="menu-item-939" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939 {{ uri() == 'contact-us' ? 'active' : ''}}">
                        <a title="Contact" href="{{ url('contact-us') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Contact <span class="decor"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>