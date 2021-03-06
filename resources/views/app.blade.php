
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Приглашение на свадьбу" />
    <meta property="og:image" content="http://wedding.vleukhin.xyz/img/photo5.png" />
    <meta property="og:type" content="website" />
    @yield('meta')
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Приглашение на свадьбу</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/js_composer_front_custom.css?ver=4.12.1" rel="stylesheet">
    <link href="/css/style_custom.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/mdi.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
    <!-- <link href="js/jquery.formstyler.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.formstyler.min.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/imgLiquid-min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>

@yield('content')


<script type="text/javascript" src="/js/2gis.js"></script>

<!--script type="text/javascript" src="//maps.api.2gis.ru/1.0"></script-->
<script src="//maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

<script type="/text/javascript" src="js/smooth-scroll.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/parallax.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/css/jquery.bxslider.css" rel="stylesheet" />

<script type="text/javascript">

    jQuery(document).ready(function($) {
        $("a.toplink").click(function() {
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 60 + "px"
            }, {
                duration: 500,
                easing: "swing"
            });
            return false;
        });

        $(window).scroll(function(event) {
            /* Act on the event */
            if ($(this).scrollTop() >= 100){
                $(".menu-wrp").addClass('fixed');
            }
            else{
                $(".menu-wrp").removeClass('fixed');
            }
        });
        $(window).scroll(function(event) {
            /* Act on the event */
            if ($(this).scrollTop() >= 899){
                $(".menu-wrp").addClass('fixed2');
            }else{
                $(".menu-wrp").removeClass('fixed2');
            }
        });

        if (screen.width < 750) {
            $('#inst .imgLiquidFill').imgLiquid();
        }
        else {
            $(".imgLiquidFill").imgLiquid();
        }

        $('.bxslider').bxSlider({
            auto: false,
            speed: 500,
            pager: false,
            infiniteLoop: true,
            nextSelector: ".slider-next",
            prevSelector: ".slider-prev",
        });

        $(".feedback-wrp .feedback .book-wrp .messages").mCustomScrollbar({scrollButtons:{enable: true}});

        DG.then(function () {
            var loc;
            if (screen.width < 750) {
                loc = [55.333,86.065];
            }
            else {
                loc = [55.31533,86.0167];
            }

            map = DG.map('map1', {
                center: loc,
                zoom: 12,
                scrollWheelZoom: false
            });
            mapCenter = map.getCenter();
            var myIcon = DG.icon({
                iconUrl: '/img/marker.png',
                iconRetinaUrl: '/img/marker.png',
                iconSize: [27, 37],
                iconAnchor: [14, 37],
                popupAnchor: [0, 0],
            });

            DG.marker([55.31533,86.0167], {icon: myIcon})
                .addTo(map)
                .bindPopup("<p style=\"text-align:center;\">Парк отель «Аквариум»</p> <p style=\"text-align:center;\">Большая летняя беседка</p>");
        });

        ph = $(".inst .col-right img");
        ph2 = $(".inst .col-right img");

        $(".reload").click(function(event) {
            /* Act on the event */
            var min = 0;
            var max = 9;
            ph2.each(function(index, el) {
                // and the formula is:
                var random = Math.floor(Math.random() * (max - min + 1)) + min;
                $(ph[random]).attr("src", $(el).attr("src"));
                $(ph2).parent().imgLiquid();
            });
        });
    });
</script>
</body>
</html>