@extends('layout.app')
@section('title')
    Patients Appointment
@endsection
@section('content')
    {{-- @include('patients_appointment.partials.section1') --}}
    @include('patients_appointment.partials.section2')
    @include('patients_appointment.partials.section3')
    @include('patients_appointment.partials.section4')
    {{-- @include('patients_appointment.partials.section5') --}}
    @include('patients_appointment.partials.section6')
@endsection
