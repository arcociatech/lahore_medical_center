@extends('layout.app')
@section('title')
    Patients Services
@endsection
@section('content')
    {{-- @include('patients_services.partials.section1') --}}
    @include('patients_services.partials.section2')
    @include('patients_services.partials.section3')
    @include('patients_services.partials.section4')
@endsection
