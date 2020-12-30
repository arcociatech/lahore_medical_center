
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
    @include('sweetalert::alert');

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        var url = window.location.href;
// passes on every "a" tag
$("#sidebar a").each(function() {
    // checks if its the same on the address bar
    if (url == this.href) {
        if (
            $(this)
            .closest("li")
            .addClass("active")
        ) {
            // checks for parent link to highlight
            var data = $(this).parent().parent().find("a");
            // console.log()

            if ($(data[0]).attr("id") != "dashboard") {
                data.parent().parent().parent().addClass("active");
                data.parent().parent().siblings('a').attr("aria-expanded", "true");
                data.parent().parent().siblings('a').addClass("collapsed show");
                data.parent().parent().addClass("show");

            } else {
                $(this).addClass("active");
            }
        }
    }
});
    </script>
    @yield('scripts')

    <!-- END GLOBAL MANDATORY STYLES -->

    {{-- <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/js/components/session-timeout/bootstrap-session-timeout.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/components/session-timeout/custom-bootstrap_session_timeout.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->    --}}

