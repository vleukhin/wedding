
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Приглашение на свадьбу</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <!-- <link href="js/jquery.formstyler.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.formstyler.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/imgLiquid-min.js"></script>

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
                scrollTop: $($(this).attr("href")).offset().top + "px"
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
            if ($(this).scrollTop() >= 959){
                $(".menu-wrp").addClass('fixed2');
            }else{
                $(".menu-wrp").removeClass('fixed2');
            }
        });

        $(".imgLiquidFill").imgLiquid();

        $(".inp-radio input:radio").styler();
        $(".radios input:radio").styler();

        $('.inp-radio input:radio').change(function() {
            if ($(this).is(':checked')) {
                $('.inp-radio input:radio').closest('label').removeClass("checked");
                $(this).closest('label').addClass('checked');
            }
        });
        $('.car input:radio').change(function() {
            if ($(this).is(':checked')) {
                $('.car input:radio').closest('label').removeClass("checked");
                $(this).closest('label').addClass('checked');
            }
        });
        $('.food input:radio').change(function() {
            if ($(this).is(':checked')) {
                $('.food input:radio').closest('label').removeClass("checked");
                $(this).closest('label').addClass('checked');
            }
        });
        $('.drink input:radio').change(function() {
            if ($(this).is(':checked')) {
                $('.drink input:radio').closest('label').removeClass("checked");
                $(this).closest('label').addClass('checked');
            }
        });

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
            map = DG.map('map1', {
                center: [57.147229,65.553167],
                zoom: 14,
                scrollWheelZoom: false
            });
            mapCenter = map.getCenter();
            var myIcon = DG.icon({
                iconUrl: '/img/marker.png',
                iconRetinaUrl: '/img/marker.png',
                iconSize: [27, 37],
                iconAnchor: [14, 37],
                popupAnchor: [0, 0],
                // shadowUrl: '',
                // shadowRetinaUrl: '',
                // shadowSize: [68, 95],
                // shadowAnchor: [22, 94]
            });
            // var myIcon2 = DG.icon({
            //     iconUrl: 'img/zags.png',
            //     iconRetinaUrl: 'img/zags.png',
            //     iconSize: [66, 92],
            //     iconAnchor: [33, 92],
            //     popupAnchor: [0, 0],
            //     // shadowUrl: '',
            //     // shadowRetinaUrl: '',
            //     // shadowSize: [68, 95],
            //     // shadowAnchor: [22, 94]
            // });

            DG.marker([57.147229,65.553167], {icon: myIcon}).addTo(map).bindPopup("<p style=\"text-align:center;\">ЗАГС</p> <p style=\"text-align:center;\">Жемчужный зал</p>");
            //         	 	DG.marker([57.147229,65.57], {icon: myIcon2}).addTo(map).bindPopup("<p style=\"text-align:center;\">ЗАГС</p> <p style=\"text-align:center;\">Жемчужный зал</p>");
        });
        DG.then(function () {
            map2 = DG.map('map2', {
                center: [57.147229,65.553167],
                zoom: 14,
                scrollWheelZoom: false
            });
            mapCenter2 = map2.getCenter();
            var myIcon2 = DG.icon({
                iconUrl: '/img/marker.png',
                iconRetinaUrl: '/img/marker.png',
                iconSize: [27, 37],
                iconAnchor: [14, 37],
                popupAnchor: [0, 0],
                // shadowUrl: '',
                // shadowRetinaUrl: '',
                // shadowSize: [68, 95],
                // shadowAnchor: [22, 94]
            });
            // var myIcon2 = DG.icon({
            //     iconUrl: 'img/zags.png',
            //     iconRetinaUrl: 'img/zags.png',
            //     iconSize: [66, 92],
            //     iconAnchor: [33, 92],
            //     popupAnchor: [0, 0],
            //     // shadowUrl: '',
            //     // shadowRetinaUrl: '',
            //     // shadowSize: [68, 95],
            //     // shadowAnchor: [22, 94]
            // });

            DG.marker([57.147229,65.553167], {icon: myIcon2}).addTo(map2).bindPopup("Ресторан<br /> <p style=\"text-align:center;\">ЧАЙКА</p>");
            //         	 	DG.marker([57.147229,65.57], {icon: myIcon2}).addTo(map).bindPopup("<p style=\"text-align:center;\">ЗАГС</p> <p style=\"text-align:center;\">Жемчужный зал</p>");
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