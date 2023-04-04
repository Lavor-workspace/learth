@extends('layout.dashboard')

@section('content')
    @if (Request::is('blinke'))
        <x-dashboard.blinke />
    @elseif (Request::is('widi'))
        <x-dashboard.widi />
    @elseif (Request::is('personal'))
        <x-dashboard.personal />
    @endif
@endsection
