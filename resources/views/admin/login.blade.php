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
                    <label for="firstName">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </form>
    </div>
@endsection