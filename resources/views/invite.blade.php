@extends('app')

@section('content')
    @include('inc.header', ['with_menu' => true])
    {{--@include('inc.history')--}}
    @include('inc.countdown')
    @include('inc.ceremony')
    @include('inc.inviting')
    @include('inc.questioning')
    @include('inc.inst')
    @include('inc.team')
    @include('inc.banket')
    @include('inc.footer')

    <script>
        @if($survey_done === '1')
        swal('Спасибо!', 'Мы учтем {{ $invite->getText('твои', 'ваши') }} пожелания!', 'success');
        @elseif($survey_done === '0')
        swal(':(', 'Очень жаль, что {{ $invite->getText('Ты не придешь', 'вы не придёте', 'Вы не придёте') }}', 'error');
        @endif
    </script>
@endsection