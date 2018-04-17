<div id="inviting" class="inviting-wrp">
    <div class="inviting">
        <div class="col-md-6 col-left clear">
            <div class="inviting-text">
                <div class="text-wrp">
                    <div class="title">{{ $invite->getTitle() }}</div>
                    <div class="text">
                        7 июля 2018 года может пройти <br />
                        как обычный день<br />
                        и не запомниться {{ $invite->multiple ? 'вам' : 'тебе' }} ничем особенным... <br />
                        А может стать одним из самых приятных дней не только для нас, <br />
                        но и для {{ $invite->multiple ? 'вас' : 'тебя' }}!<br />
                        Очень ждём {{ $invite->multiple ? 'вас' : 'тебя' }} на нашем счастливом празднике - нашей свадьбе!<br /><br />

                        Просим {{ $invite->multiple ? 'вас' : 'тебя' }} сообщить о {{ $invite->multiple ? 'вашем' : 'твоем' }} согласии или отказе до <b>25 июня</b> <br />
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
