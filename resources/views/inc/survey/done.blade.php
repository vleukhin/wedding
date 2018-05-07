{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@if ($invite->accepted)
    <div id="survey">
        <div class="info">{{ $invite->getText('Твои', 'Ваши') }} ответы на опрос. Для внесения изменений обращайтесь к Вите.</div>
        @if (!$invite->multiple)
            <div class="row radios">
                <div class="col-md-6 food clear">
                    <div class="name">Какая еда предпочтительна</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="meat" @if($invite->survey['meal'] == 'meat') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cow"></i>
                            <label>мясо</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="fish" @if($invite->survey['meal'] == 'fish') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-fish"></i>
                            <label>рыба</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="bird" @if($invite->survey['meal'] == 'bird') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-twitter"></i>
                            <label>птица</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  drink clear">
                    <div class="name">Что {{ $invite->getText('будешь', 'будете') }} пить</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="wine" @if($invite->survey['drink'] == 'wine') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-wine"></i>
                            <label>Вино</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="cognac" @if($invite->survey['drink'] == 'cognac') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Коньяк</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="wiskey" @if($invite->survey['drink'] == 'wiskey') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Виски</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="vodka" @if($invite->survey['drink'] == 'vodka') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-stange"></i>
                            <label>Водку</label>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="title">{{ $invite->getNames()[0] }}</div>
            <div class="row radios" style="margin-bottom: 30px">
                <div class="col-md-6 food clear">
                    <div class="name">Какая еда предпочтительна</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="meat" @if($invite->survey['meal'][0] == 'meat') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cow"></i>
                            <label>мясо</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="fish" @if($invite->survey['meal'][0] == 'fish') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-fish"></i>
                            <label>рыба</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal" value="bird" @if($invite->survey['meal'][0] == 'bird') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-twitter"></i>
                            <label>птица</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  drink clear">
                    <div class="name">Что {{ $invite->getText('будешь', 'будете') }} пить</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="wine" @if($invite->survey['drink'][0] == 'bird') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-wine"></i>
                            <label>Вино</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="cognac" @if($invite->survey['drink'][0] == 'cognac') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Коньяк</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="wiskey" @if($invite->survey['drink'][0] == 'wiskey') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Виски</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink" value="vodka" @if($invite->survey['drink'][0] == 'vodka') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-stange"></i>
                            <label>Водку</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">{{ $invite->getNames()[1] }}</div>
            <div class="row radios">
                <div class="col-md-6 food clear">
                    <div class="name">Какая еда предпочтительна</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="meal1" value="meat" @if($invite->survey['meal'][1] == 'meat') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cow"></i>
                            <label>мясо</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal1" value="fish" @if($invite->survey['meal'][1] == 'fish') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-fish"></i>
                            <label>рыба</label>
                        </div>
                    </div>
                    <div class="pretty  p-icon p-curve p-pulse">
                        <input type="radio" name="meal1" value="bird" @if($invite->survey['meal'][1] == 'bird') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-twitter"></i>
                            <label>птица</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  drink clear">
                    <div class="name">Что {{ $invite->getText('будешь', 'будете') }} пить</div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink1" value="wine" @if($invite->survey['drink'][1] == 'bird') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-wine"></i>
                            <label>Вино</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink1" value="cognac" @if($invite->survey['drink'][1] == 'cognac') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Коньяк</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink1" value="wiskey" @if($invite->survey['drink'][1] == 'wiskey') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-cup"></i>
                            <label>Виски</label>
                        </div>
                    </div>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input type="radio" name="drink1" value="vodka" @if($invite->survey['drink'][1] == 'vodka') checked @endif disabled/>
                        <div class="state p-success">
                            <i class="icon mdi mdi-glass-stange"></i>
                            <label>Водку</label>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@else
    <div id="survey">
        <div class="info">Очень жаль, что {{ $invite->getText('ты', 'вы','Вы') }} не {{ $invite->getText('придешь', 'придете') }} :(</div>
    </div>
@endif
