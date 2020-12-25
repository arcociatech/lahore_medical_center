@extends('layout.app')
@section('title')
    Blog
@endsection
@section('content')
    {{-- @include('blog.partials.section1') --}}
    @include('blog.partials.section2')
    @include('blog.partials.section3')
    {{-- @include('blog.partials.section4') --}}
@endsection
