{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('admin.app')

@section('content')
    <div class="col-md-8 order-md-1 offset-md-2">
        <h4 class="mb-3">Вход</h4>
        <form action="{{ route('login') }}" method="post">
        <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="" value="" required="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required="">
                </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </form>
    </div>
@endsection