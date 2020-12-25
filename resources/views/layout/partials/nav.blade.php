<header>
    <div class="banner--wrap">
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <nav class="navbar navbar-expand-lg navbar-light">
                            <h2>Lahore Medical Center</h2>
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
                                        <a class="nav-link dropdown-toggle" href="{{url('blog/index')}}"   role="button"   aria-haspopup="true" aria-expanded="false"> Blog </a>
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
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-outline-primary appointment-btn-top" href="tel:053-3724611">Appointment</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="banner-slider">
                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                            <div class="main-title">
                                <span>We are here for you</span>
                                <h1>
                                    What Makes Us Better, Makes You Better.
                                </h1>
                                <p>
                                    Our goal is & has always been to provide the best healthcare possible to all of our patients.
                                </p>
                                <a href="tel:053-3724611" class="btn btn-primary">Make Appointment</a>
                                {{-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a> --}}
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                            <div class="anim-container flex-fill">
                                <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                        fill="#4D72D0" />
                                    <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                        fill="#4D72D0" />
                                </svg>
                                <img src="{{asset('images/hero-doctor-1.png')}}" class="img-fluid animated-hero" alt="hero" />
                                <ul class="main-slider-social">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                            <div class="main-title">
                                <span>We are here for you</span>
                                <h1>
                                    What Makes Us Better, Makes You Better.
                                </h1>
                                <p>
                                    We pride ourselves on offering a modern and technologically advanced medical facility with world leading equipment to provide you with the best healthcare possible.
                                </p>
                                <a href="tel:053-3724611" class="btn btn-primary">Make Appointment</a>
                                {{-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a> --}}
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                            <div class="anim-container flex-fill">
                                <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                        fill="#4D72D0" />
                                    <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                        fill="#4D72D0" />
                                </svg>
                                <img src="{{asset('images/hero-doctor-1.png')}}" class="img-fluid animated-hero" alt="hero" />
                                <ul class="main-slider-social">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                            <div class="main-title">
                                <span>We are here for you</span>
                                <h1>
                                    What Makes Us Better, Makes You Better.
                                </h1>
                                <p>
                                    Our physical infrastructure has been custom-built based on the best practices of top medical facilities around the world.
                                </p>
                                <a href="tel:053-3724611" class="btn btn-primary">Make Appointment</a>
                                {{-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a> --}}
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                            <div class="anim-container flex-fill">
                                <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                        fill="#4D72D0" />
                                    <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                        fill="#4D72D0" />
                                </svg>
                                <img src="{{asset('images/hero-doctor-1.png')}}" class="img-fluid animated-hero" alt="hero" />
                                <ul class="main-slider-social">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
