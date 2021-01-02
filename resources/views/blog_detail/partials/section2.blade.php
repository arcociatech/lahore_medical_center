<section class="space">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-8">

                    <div class="blog-list blog-deatil">

                        <img src="{{asset('images/'.$blog->image)}}" class="img-fluid" alt="#" style="max-height: 600px; max-width: 600px;">
                        <div class="blog-date">
                            <h3>{{Carbon\Carbon::parse($blog->created_at)->format('d')}}</h3>
                            <span>{{Carbon\Carbon::parse($blog->created_at)->format('M')}}</span>
                        </div>
                        <div class="blog-text-wrap border-0 pl-0 pr-0">
                            <div class="blog-comment-top border-0">

                            </div>
                            <h2 class="text-capitalize">{{$blog->header}}</h2>
                            <p>{{$blog->description}}</p>

                        </div>
                    </div>

            </div>

        </div>
    </div>
</section>
