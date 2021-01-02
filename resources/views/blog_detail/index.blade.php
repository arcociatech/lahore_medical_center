@extends('layout.app')
@section('title')
    Blog
@endsection
@section('content')
    {{-- @include('blog.partials.section1') --}}
    @include('blog_detail.partials.section1')
    @include('blog_detail.partials.section2')
    {{-- @include('blog.partials.section4') --}}
@endsection
