<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
    $product_categories = \App\Models\ProductCategory::where('id', '>', 1)
                                ->where('language', $lang)
                                ->orderBy('order_num')
                                ->take($config['homepage_product_quantity'])
                                ->get();
?>
<div style="background-image: url('/wp-content/uploads/2018/09/bg-oil-gr-e1543567346854.png')" data-vc-parallax="1.5" data-vc-parallax-image="/wp-content/uploads/2018/09/bg-oil-gr-e1543567346854.png" class="vc_row wpb_row vc_row-fluid services-single-area services-single-content vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
    <div class="container">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center;">
                                <span style="color: #000000;">
                                    <strong>OUR PRODUCT AREAS</strong>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 60px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        @foreach($product_categories as $cat)
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                            <a href="/product-category/{{ $cat->alias }}" class="pcat">
                                                <img width="370" height="380" src="{{ $cat->image }}">
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
    <div class="vc_parallax-inner skrollable skrollable-between" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(/wp-content/uploads/2018/09/bg-oil-gr-e1543567346854.png;); top: -44.1522%;"></div>
</div>