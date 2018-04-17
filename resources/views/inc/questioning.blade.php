<div id="questioning" class="questioning-wrp">
    <div class="questioning">
        <div class="title">Опрос</div>
        <form action="#">
            <div class="row inp-radio">
                <div class="col-md-6 col-left clear coming">
                    <label>Конечно, {{ $invite->getText('я буду', 'мы будем', 'я буду') }} <input type="radio" name="group1"></label>
                </div>
                <div class="col-md-6 col-right clear coming">
                    <label>{{ $invite->getText('Я не приду', 'Мы не придем','Я не приду') }}<input type="radio" name="group1"></label>
                </div>
            </div>
            <div class="info">Пожалуйста, чтобы все прошло идеально, {{ $invite->getText('ответь', 'ответьте') }} еще на несколько вопросов</div>
            <div class="row radios">
                <div class="col-md-6 food clear">
                    <div class="name">Какая еда предпочтительна</div>
                    <div class="quest-radio"><label><input type="radio" name="group3" class="radios-check">мясо</label></div>
                    <div class="quest-radio"><label><input type="radio" name="group3" class="radios-check">рыба</label></div>
                    <div class="quest-radio"><label><input type="radio" name="group3" class="radios-check">птица</label></div>
                </div>
                <div class="col-md-6  drink clear">
                    <div class="name">Что {{ $invite->getText('будешь', 'будете') }} пить</div>
                    <div class="quest-radio"><label><input type="radio" name="group4" class="radios-check">вино</label></div>
                    <div class="quest-radio"><label><input type="radio" name="group4" class="radios-check">коньяк</label></div>
                    <div class="quest-radio"><label><input type="radio" name="group4" class="radios-check">виски</label></div>
                </div>
            </div>
            <div class="row">
                <button class="btn">Отправить</button>
            </div>
        </form>
    </div>
</div>
