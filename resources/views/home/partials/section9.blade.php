<div class="light">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12">
                <div class="testi-slider-style2">
                    <div class="testimonial-style2">
                        <h1>Notice Board</h1>

                        <p>
                            @foreach ($notice_board as $item)
                            {{$item->notice_board}}<br>
                            <span>{{Carbon\Carbon::parse($item->created_at)->format('M d,Y')}} | By Admin</span>
                            @endforeach

                        </p>
                    </div>

                </div>
                <hr>

            </div>
        </div>
    </div>
</div>
