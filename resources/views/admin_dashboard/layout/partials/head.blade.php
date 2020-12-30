
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <style>
        .layout-px-spacing { min-height: calc(100vh - 96px)!important; }
        h4.modal-title { color: #000; }
        .modal-content {
            border: none;
            box-shadow: 0px 0px 15px 1px #ebedf2;
            border: 1px solid #bfc9d4;
        }
        .modal-body { text-align: center; }
        .modal-body p {
            color: #3b3f5c;
            font-weight: 600;
            margin-bottom: 0; }
        p span.countdown-holder { color: #e7515a; font-size: 18px; }
        .modal-footer { border: none; }
        .progress {
            width: 50%;
            margin: 0 auto;
            border-radius: 30px;
            height: 10px;
        }
        .modal-backdrop { background-color: #fff; }
        @media (min-width: 576px) { .modal-dialog { max-width: 350px; } }
    </style>
    <!--  END CUSTOM STYLE FILE  -->
@yield('style')
