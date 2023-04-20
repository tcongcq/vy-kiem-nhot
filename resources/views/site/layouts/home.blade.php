<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home || Sinopec</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/theme/img/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/theme/img/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/theme/img/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/theme/img/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/theme/img/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/theme/img/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/theme/img/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/theme/img/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/theme/img/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/theme/img/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/theme/img/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/theme/img/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/theme/img/fav-icon/favicon-16x16.png">


    <!-- master stylesheet -->
    <link rel="stylesheet" href="/theme/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="/theme/css/responsive.css">

    <!-- CUSTOM CSS FILE -->
    <link rel="stylesheet" href="/theme/css/custom.css" />
    
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="/theme/css/skin/color1.css">

</head>

<body class="@yield('body-class')">

    @yield('main')

    <script type="text/javascript">
        function showPosition(position) {
            console.log("Latitude: " + position.coords.latitude +
            " Longitude: " + position.coords.longitude);
            alert("Latitude: " + position.coords.latitude +
            " Longitude: " + position.coords.longitude)
        }
        const up = function(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        };
    </script>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html" onclick="up()"><span class="fa fa-angle-up"></span></div>


    <!-- main jQuery -->
    <script src="/theme/js/jquery-1.11.1.min.js"></script>
    <!-- bootstrap -->
    <script src="/theme/js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="/theme/js/jquery.bxslider.min.js"></script>
    <!-- count to -->
    <script src="/theme/js/jquery.countTo.js"></script>
    <!-- owl carousel -->
    <script src="/theme/js/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="/theme/js/validate.js"></script>
    <!-- mixit up -->
    <script src="/theme/js/jquery.mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="/theme/js/jquery.fancybox.pack.js"></script>
    <!-- easing -->
    <script src="/theme/js/jquery.easing.min.js"></script>
    <!-- gmap script -->
    <!-- <script src="/theme/js/maplace.js"></script> -->
    <!-- gmap helper -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- Language change script -->
    <script src="/theme/js/jquery.polyglot.language.switcher.js"></script>
    <!-- <script src="/theme/js/jquery-ui-1.11.4/jquery-ui.js"></script> -->
    <!-- revolution slider js -->
    <script src="/theme/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/theme/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/theme/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script src="/theme/js/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
    <!-- thm custom script -->
    <script src="/theme/js/custom.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
    <script src="/theme/customizer/plugins/jQuery.style.switcher.min.js"></script>
    <script src="/theme/customizer/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/theme/customizer/js/customizer.js"></script>
    
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/masonry.pkgd.min.js"></script>

</body>

</html>
