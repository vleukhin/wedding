{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@php($name = !$invite->multiple ? 'meal' : "meal[$index]")
<div class="col-md-6 food clear">
    <div class="name">Какая еда предпочтительна</div>
    <div class="pretty p-icon p-curve p-pulse">
        <input type="radio" name="{{ $name }}" value="meat"/>
        <div class="state p-success">
            <i class="icon mdi mdi-cow"></i>
            <label>мясо</label>
        </div>
    </div>
    <div class="pretty  p-icon p-curve p-pulse">
        <input type="radio" name="{{ $name }}" value="fish"/>
        <div class="state p-success">
            <i class="icon mdi mdi-fish"></i>
            <label>рыба</label>
        </div>
    </div>
    <div class="pretty  p-icon p-curve p-pulse">
        <input type="radio" name="{{ $name }}" value="bird"/>
        <div class="state p-success">
            <i class="icon mdi mdi-twitter"></i>
            <label>птица</label>
        </div>
    </div>
</div>