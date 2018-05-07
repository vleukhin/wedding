<div id="questioning" class="questioning-wrp">
    <div class="questioning">
        <div class="title">Опрос</div>
        <form action="{{ route('survey', $invite->uid) }}" method="POST">
            <div class="row inp-radio">
                <div class="col-md-6 col-left clear coming accept">
                    <label>Конечно, {{ $invite->getText('я буду', 'мы будем', 'я буду') }} <input type="radio" name="accept" style="display: none;"></label>
                </div>
                <div class="col-md-6 col-right clear coming decline">
                    <label>{{ $invite->getText('Я не приду', 'Мы не придем','Я не приду') }}<input type="radio" name="decline" style="display: none;"></label>
                </div>
            </div>
            <div id="survey">
                <div class="info">Пожалуйста, чтобы все прошло идеально, {{ $invite->getText('ответь', 'ответьте') }} еще на несколько вопросов</div>
                @if (!$invite->multiple)
                    <div class="row radios">
                        @include('inc.survey.meal', ['invite' => $invite])
                        @include('inc.survey.drink', ['invite' => $invite])
                    </div>
                @else
                    <div class="title">{{ $invite->getNames()[0] }}</div>
                    <div class="row radios">
                        @include('inc.survey.meal', ['invite' => $invite, 'index' => 0])
                        @include('inc.survey.drink', ['invite' => $invite, 'index' => 1])
                    </div>
                    <div class="title">{{ $invite->getNames()[1] }}</div>
                    <div class="row radios">
                        @include('inc.survey.meal', ['invite' => $invite, 'index' => 1])
                        @include('inc.survey.drink', ['invite' => $invite, 'index' => 1])
                    </div>
                @endif
            </div>
            <div class="row">
                <button class="btn">Отправить</button>
            </div>
        </form>
    </div>
</div>

<script>
    (function ($) {
        $(document).ready(function () {
            $('.decline').click(function () {
                $('#survey').slideUp();
            });

            $('.accept').click(function () {
                $('#survey').slideDown();
            });
        });
    })(window.jQuery);
</script>
