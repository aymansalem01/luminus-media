@include('layout.header')
</head>
@include('layout.nav')

<!-- Start Section Banner Area -->
<div class="section-banner bg-4">
    <div class="container">
        <div class="banner-spacing">

        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start Contact  Area-->
<div class="contact-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-content">
                    <div class="header-content">
                        <h2 data-aos="fade-up" data-aos-delay="100" >Contact Us</h2>
                        <h3>We’d Love To Hear From You</h3>
                        <p>We welcome contact with institutions, partners, and those interested in collaborating in creative education, media and film production, and capacity building.</p>
                        <p>For verifications, please email <a href="mailto:info@saejordan.com">info@saejordan.com</a></p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm" action="{{ route('post_contact') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('form.first_name') }}</label>
                                        <input type="text" name="f_name" class="form-control" id="name"
                                            required data-error="Please enter your name" placeholder="First Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('form.last_name') }}</label>
                                        <input type="text" name="l_name" class="form-control" id="name2"
                                            required data-error="Please enter your name" placeholder="Last Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('form.email') }}</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            required data-error="Please enter your email" placeholder="example@example.com">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('form.phone') }}</label>
                                        <input type="text" name="phone_number" class="form-control" id="phone_number"
                                            required data-error="Please enter your phone number" placeholder="start with 07">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Inquiry Type</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Admission</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('form.massage') }}</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                                            data-error="Please enter your message" placeholder=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">{{ __('form.contact_button') }}</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">

                    <!-- Start Map Area -->
                    <div id="map" class="map-pd">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10757.606337585425!2d35.85921518551319!3d31.898148396054022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca6e3cdc0b471%3A0x28c0bb76f33b9ab8!2sSAE%20Institute!5e0!3m2!1sen!2s!4v1700000000000"></iframe>
                    </div>
                    <!-- End Map Area -->

                    <div class="info-details">
                        <ul>
                            <li><i class='bx bxs-phone-call'></i> General Inquiries - <a href="tel:+96264000707">(06) 400 0707</a></li>
                            <li><i class='bx bxs-map'></i> Amman, Jordan</li>
                            <li><i class='bx bxs-envelope'></i><a class="info-mail"
                                    href="mailto:info@saejordan.com">info@saejordan.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Contact Area-->



@include('layout.footer')
