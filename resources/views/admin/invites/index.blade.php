{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('admin.app')

@section('content')
    <table class="table table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>uid</th>
            <th>Кому</th>
            <th>Принято</th>
            <th>Просмотры</th>
            <th>Действия</th>
        </tr>
        @if($invites->isNotEmpty())
            <tr>
                <td>{{ $invite->id }}</td>
                <td>{{ $invite->uid }}</td>
                <td>{{ $invite->name }}</td>
                <td>
                    @if($invite->accepted)
                        <i class="fa fa-accepted"></i>
                    @else
                        <i class="fa fa-times"></i>
                    @endif
                </td>
                <td>{{ $invite->view }}</td>
                <td>
                    <a href="{{ route('admin.invites.edit', $invite) }}" class="btn btn-default">
                        <i class="fa fa-edit"> </i> Редактировать
                    </a>
                </td>
            </tr>
        @endif
    </table>
@endsection