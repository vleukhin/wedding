{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="col-md-6  drink clear">
    <div class="name">Что {{ $invite->getText('будешь', 'будете') }} пить</div>
    <div class="pretty p-icon p-curve p-pulse">
        <input type="radio" name="@if (!$invite->multiple)drink @else drink[{{$index}}]@endif" value="wine"/>
        <div class="state p-success">
            <i class="icon mdi mdi-glass-wine"></i>
            <label>Вино</label>
        </div>
    </div>
    <div class="pretty p-icon p-curve p-pulse">
        <input type="radio" name="@if (!$invite->multiple)drink @else drink[{{$index}}]@endif" value="cognac"/>
        <div class="state p-success">
            <i class="icon mdi mdi-cup"></i>
            <label>Коньяк</label>
        </div>
    </div>
    <div class="pretty p-icon p-curve p-pulse">
        <input type="radio" name="@if (!$invite->multiple)drink @else drink[{{$index}}]@endif" value="wiskey"/>
        <div class="state p-success">
            <i class="icon mdi mdi-cup"></i>
            <label>Виски</label>
        </div>
    </div>
    <div class="pretty p-icon p-curve p-pulse">
        <input type="radio" name="@if (!$invite->multiple)drink @else drink[{{$index}}]@endif" value="vodka"/>
        <div class="state p-success">
            <i class="icon mdi mdi-glass-stange"></i>
            <label>Водку</label>
        </div>
    </div>
</div>