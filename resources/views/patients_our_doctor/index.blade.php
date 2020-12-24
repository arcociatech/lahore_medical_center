@extends('layout.app')
@section('title')
    Our Doctors
@endsection
@section('content')
    {{-- @include('patients_our_doctor.partials.section1') --}}
    @include('patients_our_doctor.partials.section2')
    @include('patients_our_doctor.partials.section3')
    @include('patients_our_doctor.partials.section4')
    @include('patients_our_doctor.partials.section5')
@endsection
