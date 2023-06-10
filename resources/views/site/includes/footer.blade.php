<?php
    $lang = \App::getLocale();
    $config = Config::get_config($lang);
?>
<footer class="footer-area 111" style="background-image:url('{{ url("theme/includes/footer-background.jpg") }}');">
    <div class="footer-middle">
        <div class="container">
            <div class="row clearfix">
                <div id="bunch_about_us-2" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-footer-widget footer-widget widget_bunch_about_us">
                    <div class="footer-logo">
                        <img src="{{ url($config['footer_logo']) }}" alt="Awesome Footer Logo">
                    </div>
                    <div class="text">
                        <p>
                            {!! $config['footer_introduce'] !!}
                        </p>
                    </div>
                </div>
                <div id="text-3" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-footer-widget footer-widget widget_text">
                    <div class="textwidget">
                        <p></p>
                        <p>
                            <iframe style="border: 0;" src="{{ $config['footer_maps'] }}" width="100%" height="210px" frameborder="0" allowfullscreen=""></iframe>
                        </p>
                    </div>
                </div>
                <div id="custom_html-3" class="widget_text col-lg-4 col-md-4 col-sm-6 col-xs-12 single-footer-widget footer-widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <ul class="contact-info">
                            @if($config['show_footer_address'])
                            <li class="address">
                                <div class="icon-holder">
                                    <span class="flaticon-map"></span>
                                </div>
                                <div class="content">
                                    <h4>{!! $config['footer_address_title'] !!}</h4>
                                    <p>{!! $config['footer_address'] !!}</p>
                                </div>
                            </li>
                            @endif
                            @if($config['show_footer_email'])
                            <li class="email">
                                <div class="icon-holder">
                                    <span class="flaticon-note"></span>
                                </div>
                                <div class="content">
                                    <h4>{!! $config['footer_email_title'] !!}</h4>
                                    <p>
                                        <a href="mailto:{{ $config['footer_email'] }}">{!! $config['footer_email'] !!}</a>
                                    </p>
                                </div>
                            </li>
                            @endif
                            @if($config['show_footer_phone'])
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-telephone"></span>
                                </div>
                                <div class="content">
                                    <h4>{!! $config['footer_phone_title'] !!}</h4>
                                    <p>
                                        <a href="tel:{{ preg_replace('/\s+/', '', $config['footer_phone']) }}">{!! $config['footer_phone'] !!}</a>
                                    </p>
                                </div>
                            </li>
                            @endif
                            <li hidden>
                                <div class="icon-holder">
                                    <span class="flaticon-social-1"></span>
                                </div>
                                <div class="content">
                                    <h4>Fanpage</h4>
                                    <p>
                                        <a href="#">Facebook Page</a> / <a href="#">Tiktok Channel</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="copy-right">
                        <p>© 2020 Interocean Lubricants (Private) Limited. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="copy-right">
                        <p style="margin-bottom: 0px;">Assembled by <a href="/">Jigsaw Ensemble</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>