<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1535614439582">
    <div class="container">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h3>
                                                <span style="color: #000000;">
                                                    <strong>{{ __('locale.menu.about-us') }}</strong>
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>
                                                {!! $config['homepage_about_us'] !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <style>
                                        .vc_btn3-style-gradient-custom.vc_btn-gradient-btn-63e533655c4e7:hover {
                                            color: #ffffff;
                                            background-color: #ba0913;
                                            border: none;
                                            background-position: 100% 0;
                                        }
                                    </style>
                                    <style>
                                        .vc_btn3-style-gradient-custom.vc_btn-gradient-btn-63e533655c4e7 {
                                            color: #ffffff;
                                            border: none;
                                            background-color: #ba0913;
                                            background-image: -webkit-linear-gradient(left, #ba0913 0%, #ba0913 50%, #ba0913 100%);
                                            background-image: linear-gradient(to right, #ba0913 0%, #ba0913 50%, #ba0913 100%);
                                            -webkit-transition: all .2s ease-in-out;
                                            transition: all .2s ease-in-out;
                                            background-size: 200% 100%;
                                        }
                                    </style>
                                    <div class="vc_btn3-container vc_btn3-inline">
                                        <a data-vc-gradient-1="#ba0913" data-vc-gradient-2="#ba0913" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-gradient-custom vc_btn-gradient-btn-63e533655c4e7" href="{!! $config['homepage_about_us_link'] !!}" title="">READ MORE</a>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h3>
                                                <span style="color: #000000;">
                                                    <strong>{{ __('locale.about-us.vision') }}</strong>
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!! $config['homepage_about_us_vision'] !!}</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h3>
                                                <strong>
                                                    <span style="color: #000000;">{{ __('locale.about-us.mission') }}</span>
                                                </strong>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!! $config['homepage_about_us_mission'] !!}</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="user-select: none;">
    <img src="/theme/img/homepage/banner-2.jpg">
</div>