<footer>
    <div class="container container-custom">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="foot-contact-block">
                    <h4>Lahore Medical Center</h4>
                    {{-- <img src="images/foot-logo.png" class="img-fluid" alt="#" /> --}}
                    <p>
                         Opp. Service Coloney, G.T.Road, Gujrat.
                    </p>
                    <a href="tel:053-3724611">
                        <h4><i class="fas fa-phone"></i>053-3724611</h4>
                    </a>
                    <a href="tel:053-9260459">
                        <h4><i class="fas fa-phone"></i>053-9260459</h4>
                    </a>
                    <a href="mailto:lmcgujrat@gmail.com">
                        <h4><i class="far fa-envelope"></i><span class="__cf_email__"
                                data-cfemail="b3daddd5dcf3ded6d7d6d7dadd9dd0dcde">lmcgujrat@gmail.com
                            </span></h4>
                    </a>
                    {{-- <a href="mailto:Text@gmail.com">Text@gmail.com</a> --}}
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                <div class="foot-link-box">
                    <h4>Quick Links</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
                        </li>
                        <li>
                            <a href="{{url('department/index')}}"><i class="fas fa-angle-double-right"></i>Our Services</a>
                        </li>
                        <li>
                            <a href="{{url('blog/index')}}"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
                        </li>
                        <li>
                            <a href="{{url('contact/index')}}"><i class="fas fa-angle-double-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Faq</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="foot-link-box">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Pediatrics</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Dermatology</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Cardiology</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Psychological</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Surgery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-double-right"></i>Family Medicine</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1">
                <div class="foot-link-box footlink-box_btn">
                    <a href="#" class="btn btn-outline-success">Find a Doctor</a>
                    <a href="#" class="btn btn-outline-success">Career</a>
                    <a href="#" class="btn btn-outline-success">Newsletter</a>
                    <ul>
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
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>© {{config('app.name')}} {{now()->year}} Allright Reserved</p>
                    <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
