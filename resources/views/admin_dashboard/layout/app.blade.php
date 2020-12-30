<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin_dashboard.layout.partials.head')
</head>

<body class="sidebar-noneoverflow">
    @include('admin_dashboard.layout.partials.nav')
        <div class="main-container" id="container">
            <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="search-overlay"></div>
            @include('admin_dashboard.layout.partials.sidebar')
            <div id="content" class="main-content">

                <div class="layout-px-spacing">
                    @yield('content')
                </div>
                @include('admin_dashboard.layout.partials.footer')
            </div>
        </div>
        @include('admin_dashboard.layout.partials.script')
</body>

</html>
