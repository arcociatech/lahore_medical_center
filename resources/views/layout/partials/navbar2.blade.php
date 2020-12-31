<header>
    <div class="banner--wrap">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <a class="navbar-brand" href="index.html">
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
                                                <span>Toll Free</span>
                                                <a href="tel:053-3724611"><h4>053-3724611</h4></a>
                                                <a href="tel:053-9260459"><h4>053-9260459</h4></a>
                                            </div>
                                        </li>
                                        <li class="appointment-btn">
                                            <a href="tel:053-3724611" class="btn btn-primary">Make Appointment</a>
                                            {{-- <i class="fas fa-search"></i> --}}
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
                            {{-- <h2>Lahore Medical Center </h2> --}}
                            {{-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="#" /></a> --}}
                            <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                    navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('/')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Home</a>
                                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            {{-- <a class="dropdown-item" href="index.html">Home Page One</a>
                                            <a class="dropdown-item" href="index-2.html">Home Page Two</a>
                                            <a class="dropdown-item" href="index-3.html">Home Page Three</a> --}}
                                        {{-- </div>  --}}
                                    </li>
                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('department/index')}}"  role="button"  aria-haspopup="true" aria-expanded="false"> Department</a>
                                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{url('department/index')}}">Dental Care</a>
                                            <a class="dropdown-item" href="services-2.html">Cardiology</a>
                                            <a class="dropdown-item" href="services-3.html">Neurology </a>
                                            <a class="dropdown-item" href="services-detail.html">Eye Care</a>
                                        </div> --}}
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
                                            {{-- <li>
                                                <a
                                                 href="{{url('patients_services/index')}}">Services <i
                                                        class="fas fa-plus"></i></a>
                                                {{-- <ul class="dropdown-menu dropdown-menu1">
                                                    <li><a class="dropdown-item" href="services.html">Services
                                                            One</a></li>
                                                    <li><a class="dropdown-item" href="services-2.html">Services
                                                            Two</a></li>
                                                    <li><a class="dropdown-item" href="services-3.html">Services
                                                            Three</a></li>
                                                    <li><a class="dropdown-item" href="services-detail.html">Service
                                                            Detail</a></li>
                                                </ul> --}}
                                            {{-- </li>  --}}
                                            {{-- <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('patients_appointment/index')}}">Appointment<i class="fas fa-plus"></i></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('patients_our_doctor/index')}}">Our Doctors <i class="fas fa-plus"></i></a>
                                            </li> --}}
                                            {{-- <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Our Doctors
                                                    <i class="fas fa-plus"></i></a>
                                                <ul class="dropdown-menu dropdown-menu1">
                                                    <li><a class="dropdown-item" href="doctors.html">Doctors One</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="doctors-2.html">Doctors
                                                            Two</a></li>
                                                    <li><a class="dropdown-item" href="doctors-3.html">Doctors
                                                            Three</a></li>
                                                </ul>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                                <a class="dropdown-item" href="{{url('patients_pricing/index')}}">Pricing <i class="fas fa-plus"></i></a>
                                            </li> --}}
                                        </ul>
                                    </li>

                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blog <i class="fas fa-plus"></i> </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog-standard.html">Blog Stadared</a>
                                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                            <a class="dropdown-item" href="blog-grid-2.html">Blog Grid-2</a>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                        </div>
                                    </li> --}}

                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('blogs/index')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Blog</a>
                                    </li>

                                    <li class="">
                                        <a class="nav-link dropdown-toggle" href="{{url('contact/index')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Contact Us</a>
                                    </li>

                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> pages <i class="fas fa-plus"></i> </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="about.html">About</a>
                                            <a class="dropdown-item" href="contact-us.html">Contact One</a>
                                            <a class="dropdown-item" href="contact-us-2.html">Contact Two</a>
                                            <a class="dropdown-item" href="error.html">Error 404</a>
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <ul class="cart-seperate">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i
                                                        class="fas fa-search fa-top-search"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i
                                                        class="fas fa-shopping-cart fa-top-search"></i>
                                                    <span>2</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-outline-primary appointment-btn-top" href="appointment.html">Appointment</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </nav>


    </div>

</header>
