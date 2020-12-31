@extends('admin_dashboard.layout.app')
@section('title')
create Notice
@endsection
@section('content')
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <h2>
            Please remove following Errors:
        </h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Notice Board</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{action('NoticeBoardController@store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mb-4">
                        <p><b>Enter Notice </b></p>
                        <textarea aria-required="true" rows="3" cols="45" name="notice_board" id="notice_board"
                        value="{{old('notice_board')}}" class="form-control @error('notice_board') is-invalid @enderror" placeholder="Notice Board"></textarea>
                        @error('notice_board')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
@endsection
