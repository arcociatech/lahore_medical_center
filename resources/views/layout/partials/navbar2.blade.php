<header>
    <div class="banner--wrap">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <h4>Lahore Medical Center</h4>
                                        {{-- <img src="images/logo.png" alt="#"> --}}
                                    </a>
                                </div>
                                <div class="col-md-9 d-flex align-items-end">
                                    <ul class="ml-auto">
                                        <li>
                                            <img src="{{asset('images/mail-icon.png')}}" alt="#">
                                            <div>
                                                <span>Mail us</span>
                                                <h4><a href="mailto:lmcgujrat@gmail.com" class="__cf_email__" data-cfemail="5831363e3718353d3c3d363136">lmcgujrat@gmail.com</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{asset('images/call-icon.png')}}" alt="#">
                                            <div>
                                                {{-- <span>Toll Free</span> --}}
                                                <a href="tel:053-3724611"><h4>053-3724611</h4></a>
                                                <a href="tel:053-9260459"><h4>053-9260459</h4></a>
                                            </div>
                                        </li>
                                        <li class="appointment-btn">
                                            <a href="tel:053-3724611" class="btn btn-primary">Call us Now  <i class="fas fa-phone"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                    navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('/')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Home</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('department/index')}}"  role="button"  aria-haspopup="true" aria-expanded="false">Our Services</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Our Doctors <i class="fas fa-plus"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('shahida-husain-tarar/')}}">Dr. Shahida Husain Tarar</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('muhammad-afzal-ch/')}}">Dr. Muhammad Afzal Ch.</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('muhammad-anas/')}}">Dr. Muhammad Anas</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('fouzia/')}}">Dr. Fouzia</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('anam-shareef/')}}">Dr.  Anam Shareef </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('machinery/')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Machinery</a>
                                    </li>

                                    @if (App\Models\Blog::get()->count())
                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('blogs/index')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Blog</a>
                                    </li>
                                    @endif

                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('contact/index')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </nav>


    </div>

</header>
