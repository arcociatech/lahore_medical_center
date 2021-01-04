<section class="space">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title_center">
                    <span><i>---- Blog ----</i></span>
                    <h2>Latest News & Events</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="blog-row-block">
        <div class="row">
            @foreach ($blog as $item)
            <div class="col-md-3">
                <div>
                    <img src="{{asset('images/'.$item->image)}}" width="150px" height="150px" class="img-fluid"
                        alt="#" />
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="blog-content">
                    <span>{{Carbon\Carbon::parse($item->created_at)->format('M d,Y')}} | By Admin</span>
                    <h3>
                        <td>
                            {{$item->header}}
                        </td>
                    </h3>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <div class="blog-read-more">
                    <p>
                        <i class="far fa-eye"></i>233 <span>|</span>
                        <i class="far fa-comment"></i>33
                    </p>
                    <a href="{{url('blog-detail/'.encrypt($item->id))}}" class="btn btn-primary">READ MORE</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    </div>
</section>
