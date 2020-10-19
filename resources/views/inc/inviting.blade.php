<div id="inviting" class="inviting-wrp">
    <div class="inviting">
        <div class="col-md-6 col-left clear">
            <div class="inviting-text">
                <div class="text-wrp">
                    <div class="title">{!! $invite->getTitle() !!}</div>
                    <div class="text">
                        16 января 2021 года может пройти <br />
                        как обычный день<br />
                        и не запомниться {{ $invite->getText('тебе', 'вам','Вам') }} ничем особенным... <br />
                        А может стать одним из самых приятных дней не только для нас, <br />
                        но и для {{ $invite->getText('тебя', 'вас','Вас') }}!<br />
                        Очень ждём {{ $invite->getText('тебя', 'вас','Вас') }} на нашем счастливом празднике - нашей свадьбе!<br /><br />

                        Просим {{ $invite->getText('тебя', 'вас','Вас') }} сообщить о {{ $invite->getText('твоем', 'вашем','Вашем') }}
                        согласии или отказе до <b>15 декабря</b>, <br />
                        заполнив форму ниже
                        <img src="/img/end.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-right imgLiquidFill imgLiquid">
            <img src="/img/photo6.png">
        </div>
    </div>
</div>
