@extends('layout.app')
@section('title')
    Home
@endsection
@section('content')
    {{-- @include('home.partials.section1') --}}
    @if (count($notice_board) >= 1)
        @include('home.partials.section9')
    @endif
    @include('home.partials.section2')
    @include('home.partials.section3')
    @include('home.partials.section4')
    @include('home.partials.section5')
    @include('home.partials.section6')
    {{-- @include('home.partials.section7') --}}
    @include('home.partials.section8')


@endsection
