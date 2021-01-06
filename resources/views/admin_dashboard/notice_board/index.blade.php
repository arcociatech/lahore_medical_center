@extends('admin_dashboard.layout.app')
@section('title')
    Notice View
@endsection
@section('content')
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Notice Board View</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4" id="notice_board_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Notice</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
         $("#notice_board_table").DataTable({
            processing: true,
            serverSide: true,
            url: '{{url("/notice_board")}}',
            pageLenght: 5, //default
            lenghtMenu: [
                [5, 10, 50, 100, 300, 500, 1000, -1],
                [5, 10, 50, 100, 300, 500, 1000, 'All'],
            ],
            columns: [
                { data: 'id' , name: 'id' }, //same name as db
                { data: 'notice_board' , name: 'notice_board' }, //same name as db
                { data: 'actions' , name: 'actions', orderable:false, searchable:false }, //name written in controller
            ]
         });

 </script>
@endsection
