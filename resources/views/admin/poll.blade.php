{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="row">
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                Мясо <span class="badge">{{ $meal['meat']['count'] }}</span>
            </li>
            @foreach($meal['meat']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                Рыба <span class="badge">{{ $meal['fish']['count'] }}</span>
            </li>
            @foreach($meal['fish']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                Птица <span class="badge">{{ $meal['bird']['count'] }}</span>
            </li>
            @foreach($meal['bird']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1"></div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item active">
                Виски <span class="badge">{{ $drink['wiskey']['count'] }}</span>
            </li>
            @foreach($drink['wiskey']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item active">
                Коньяк <span class="badge">{{ $drink['cognac']['count'] }}</span>
            </li>
            @foreach($drink['cognac']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item active">
                Вино <span class="badge">{{ $drink['wine']['count'] }}</span>
            </li>
            @foreach($drink['wine']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item active">
                Водка <span class="badge">{{ $drink['vodka']['count'] }}</span>
            </li>
            @foreach($drink['vodka']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-xs-1">
        <ul class="list-group">
            <li class="list-group-item active">
                Не пью <span class="badge">{{ $drink['none']['count'] }}</span>
            </li>
            @foreach($drink['none']['list'] as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
</div>