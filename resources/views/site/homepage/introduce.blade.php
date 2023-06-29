<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<style type="text/css">
.call-to-action-area .box, .call-to-action-area .box:before, .call-to-action-area .box:after {
    background-color: #000;
}
.call-to-action-area{
    background-image: linear-gradient(to bottom, #1c0b07, #000);
}
.call-to-action-area .box a{
    border: 2px solid #000;
    color: #000;
}
.call-to-action-area .box a:hover{
    color: #ba0913;
}

.call-to-action-area .box:before, .call-to-action-area .box:after{
    display: none;
}
</style>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner" style="background-color: #000;">
            <div class="wpb_wrapper">
                <section class="call-to-action-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>{!! $config['homepage_title_1'] !!}</h2>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{!! $config['homepage_link_1'] !!}">{!! $config['homepage_button_1'] !!}</a>
                                        </div>
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
<div style="user-select: none; display: none;">
    <img src="/theme/img/homepage/banner-1.jpg">
</div>