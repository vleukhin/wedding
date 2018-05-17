@extends('app')

@section('meta')
    <meta property="og:description" content="Дорогие наши родные, приглашаем вас на нашу свадьбу"/>
@endsection

@section('content')
    @include('inc.header', ['with_menu' => true])
    @include('inc.countdown')
    @include('inc.ceremony')
    <div id="inviting" class="inviting-wrp">
        <div class="inviting">
            <div class="col-md-6 col-left clear">
                <div class="inviting-text">
                    <div class="text-wrp">
                        <div class="title">Дорогие наши родные</div>
                        <div class="text">
                            7 июля 2018 года может пройти <br />
                            как обычный день<br />
                            и не запомниться вам ничем особенным... <br />
                            А может стать одним из самых приятных дней не только для нас, <br />
                            но и для вас!<br />
                            Очень ждём вас на нашем счастливом празднике - нашей свадьбе!<br /><br />

                            Просим вас сообщить о вашем
                            согласии или отказе до <b>15 июня</b>.
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

    @include('inc.inst')
    @include('inc.team')
    @include('inc.banket')
    @include('inc.footer')
@endsection