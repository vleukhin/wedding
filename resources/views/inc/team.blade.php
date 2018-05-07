{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div id="groom" class="banket-wrp">
    <div class="banket">
        <div class="col-md-6 col-left">
            <div id="groom_map" class="dg-map"></div>
        </div>
        <div class="col-md-6 col-right">
            <div class="banket-text">
                <div class="text-wrp">
                    <div class="title">Сборы жениха</div>
                    <div class="text">
                        Томь Ривер Плаза<br/>13:00<br/>Притомская Набережная, 7
                        <img src="/img/bottle.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="registration" class="registration-wrp">
    <div class="registration">
        <div class="col-md-6 col-left">
            <div class="registration-text">
                <div class="text-wrp">
                    <div class="title">Сборы невесты</div>
                    <div class="text">
                        Студия Nude loft<br/>12:00<br/>Пионерский бульвар, 3
                        <img src="/img/rings.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-right">
            <div id="bride_map" class="dg-map"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        DG.then(function () {
            let groom_map = DG.map('groom_map', {
                center: [55.35833145429777, 86.087064743042],
                zoom: 14,
                scrollWheelZoom: false
            });

            var myIcon = DG.icon({
                iconUrl: '/img/marker.png',
                iconRetinaUrl: '/img/marker.png',
                iconSize: [27, 37],
                iconAnchor: [14, 37],
                popupAnchor: [0, 0],
            });

            DG.marker([55.35833145429777, 86.087064743042], {icon: myIcon})
                .addTo(groom_map)
                .bindPopup("<p style=\"text-align:center;\">Томь Ривер Плаза</p> <p style=\"text-align:center;\">xxx номер</p>");
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        DG.then(function () {
            let bride_map = DG.map('bride_map', {
                center: [55.34965811962044, 86.1071276664734],
                zoom: 14,
                scrollWheelZoom: false
            });

            var myIcon = DG.icon({
                iconUrl: '/img/marker.png',
                iconRetinaUrl: '/img/marker.png',
                iconSize: [27, 37],
                iconAnchor: [14, 37],
                popupAnchor: [0, 0],
            });

            DG.marker([55.34965811962044, 86.1071276664734], {icon: myIcon})
                .addTo(bride_map)
                .bindPopup("<p style=\"text-align:center;\">Nude loft</p> <p style=\"text-align:center;\">Мастерская красоты</p>");
        });
    });
</script>