@extends('admin_dashboard.layout.app')
@section('title')
create Blog
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
                        <h4>Blog Forms</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{action('BlogController@store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row mb-4">
                        <p><b>Upload image</b></p>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <p><b>Header</b></p>
                        <input type="text" class="form-control @error('header') is-invalid @enderror"
                            value="{{old('header')}}" name="header">
                        @error('header')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row mb-4">
                        <p><b>Describe</b></p>
                        <textarea aria-required="true" rows="3" cols="45" name="description" id="description"
                            value="description" class="form-control" placeholder="Description"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
@endsection
