@extends('app')

@section('content')
    @include('inc.header', ['with_menu' => true])
    @include('inc.history')
    @include('inc.ceremony')
    @include('inc.inviting')
    @include('inc.questioning')
    @include('inc.gallery')
    @include('inc.inst')
    @include('inc.team')
    @include('inc.banket')
@endsection