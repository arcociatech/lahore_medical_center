@extends('admin_dashboard.layout.app')
@section('title')
Blog View
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
                <form action="{{action('BlogController@update',$blog->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12 col-12  layout-spacing">
                        <div class="statbox widget box box-shadow">

                            <div class="widget-content widget-content-area">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>


                            </div>
                        </div>

                        <div class="statbox widget box box-shadow">
                    {{-- <div class="form-row mb-4"> --}}
                        <p><b>Header</b></p>
                        <input type="text" class="form-control @error('header') is-invalid @enderror"
                            value="{{$blog->header}}" name="header">
                        @error('header')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="statbox widget box box-shadow">
                    {{-- <div class="form-group col-sm-12"> --}}
                        {{-- <div class="form-group"> --}}
                            <p><b>Describe</b></p>
                            {{-- <label for="message">Message</label> --}}
                            {{-- <i class="fa fa-comment highlight" aria-hidden="true"></i> --}}
                            <textarea aria-required="true" rows="3" cols="45" name="description" id="description" value="description" class="form-control" placeholder="Description"></textarea>
                        {{-- </div> --}}
                    </div>
                    </div>


                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
