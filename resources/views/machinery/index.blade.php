@extends('layout.app')
@section('title')
    Machinery
@endsection
@section('content')
    @include('machinery.partials.section1')
    @include('machinery.partials.section2')
    {{-- @include('patients_appointment.partials.section3')
    @include('patients_appointment.partials.section4')
    @include('patients_appointment.partials.section5')
    @include('patients_appointment.partials.section6') --}}
@endsection
