@extends('layout.app')
@section('title')
    Doctor
@endsection
@section('content')
    @include('doctor1.partials.section1')
    @include('doctor1.partials.section2')
    {{-- @include('doctor1.partials.section3') --}}
@endsection
