<section>
    <iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-7 offset-md-5 col-lg-6 offset-lg-6">
                <div class="get-in-touch">
                    <img src="{{asset('images/contact-form-bg.png')}}" class="img-fluid get-in-bg" alt="#">
                    <h3>Get in Touch with Us</h3>
                    <form action="{{url('https://api.web3forms.com/submit')}}" method="POST" id="form">


                        <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first name" placeholder="First Name" required>
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last name" placeholder="Last Name" required>
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email address" placeholder="Your Email" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="phone number" placeholder="Your Phone Number" required>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group textarea-icon">
                                    <textarea class="form-control" name="message" required placeholder="Your Message" id="" rows="3"></textarea>
                                    <i class="far fa-envelope"></i>
                                    <button type="submit" class="btn btn-primary">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                        <div id="result" class="text-white"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
