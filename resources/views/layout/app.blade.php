<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.partials.head')
    <title>
        @yield('title')-{{config('app.name')}}
    </title>
</head>
<body>
    <header>
        <div class="banner--wrap">

            @if (Request::is('/') || Request::is('home'))
                @include('layout.partials.nav')
                {{-- @include('layout.partials.banner') --}}
            @else
                @include('layout.partials.navbar2')
            @endif
        </div>
    </header>
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.scripts')
</body>
</html>
