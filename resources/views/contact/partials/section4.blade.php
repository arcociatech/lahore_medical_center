<section>
    <iframe width="100%" height="450" id="gmap_canvas"
        src="https://maps.google.com/maps?q=lahore%20medical%20center&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <div class="container container-custom">
            <div class="col-md-7 offset-md-5 col-lg-6 offset-lg-6">

                <div class="get-in-touch">
                    <img src="{{asset('images/contact-form-bg.png')}}" class="img-fluid get-in-bg" alt="#">
                    <div class="row">
                        <div class="col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-2 text-center">
                            <b>@if ($errors->any())
                                <div class="text-success">
                                    <h2>
                                        Please remove following Errors:
                                    </h2>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif</b>
                            <h3>Get in Touch with Us</h3>
                            <form action="{{action('ContactController@store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                value="{{old('first_name')}}" name="first_name"
                                                placeholder="First Name">
                                            <b>@error('first_name')
                                                <div class="text-success">{{ $message }}</div>
                                                @enderror</b>
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                value="{{old('last_name')}}" placeholder="Last Name">
                                            <b>@error('last_name')
                                                <div class="text-success">{{ $message }}</div>
                                                @enderror</b>
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{-- <label for="inputUserName">Email</label> --}}
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{old('email')}}" placeholder="Email">
                                            <b>@error('email')
                                                <div class="text-success">{{ $message }}</div>
                                                @enderror</b>
                                            <i class="far fa-envelope"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{-- <label for="inputPassword4">Subject</label> --}}
                                            <input type="text" name="number"
                                                class="form-control @error('number') is-invalid @enderror"
                                                value="{{old('number')}}" placeholder="Number">
                                            <b>@error('number')
                                                <div class="text-success">{{ $message }}</div>
                                                @enderror</b>
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group textarea-icon">
                                            <textarea aria-required="true" rows="3" cols="45" name="message"
                                                id="message" class="form-control" placeholder="Message"></textarea>
                                            <i class="far fa-envelope"></i>
                                        </div>


                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
    </div>
</section>
