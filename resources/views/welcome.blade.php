@include('layout.header')

</head>
@include('layout.nav')


<!-- Start  Banner  Area -->
<div class="banner-area-2 big-bg-2" id="home">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{ asset('assets/images/ltuc2.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="banner-content-2">
            <div class="content">
                {{-- <span data-aos="fade-zoom-in" data-aos-delay="300">Global Leader in Creative & Technology </span> --}}
                <h1 data-aos="fade-up" data-aos-delay="200">Luminus-SAE</h1>
                <p data-aos="fade-up" data-aos-delay="300">
                    {{ __('home.welcome') }}
                </p>

                <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                    <a href="#about"><i class='bx bx-chevron-down'></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->


<!-- Start Campuses Area  -->
{{-- <div class="activities-area ptb-100">
    <div class="container">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>Sports and Athletics</p>
            </div>
            <h2>Beyond the Bleachers: Diverse Sports & Activities</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="image">
                        <img src="{{ asset('assets/images/sae.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h2><a href="https://jordan.sae.edu/">SAE Institute</a></h2>
                        <p>SAE Institute is where creative industries get serious.<br>
                            Hand-on eduction in audio, film, music production, game audio, and media, taught using
                            industry-standard studios, equipment, and workflows,
                            This practical learning designed for real-world creative careers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 pt-25">
                <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="image">
                        <img src="{{ asset('assets/images/luminus.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h2><a href="https://ltuc.edu.jo/">Luminus Eduction</a></h2>
                        <p>Luminus Eduction Delivers accredited education across multiple disciplines, focusing on
                            structured learning, intuitional frameworks, and academic development.<br>
                            It provides the educational backbone for learners looking to build formal qualification and
                            long-term career pathways.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="image">
                        <img src="{{ asset('assets/images/equipment.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h2><a href="">SAE Studio Booking</a></h2>
                        <p>SAE Studios offers fully equipped professional studios available for booking.<br>
                            Recording, mixing, mastering , post-production, podcasts, and media production - all in
                            purpose-built environments manged by experienced professionals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Campuses Area 2 -->
{{-- -------- about sections  ------------------------------- --}}
<div class="success-award-area ptb-100" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <span>{{ __('home.aboutHeader') }}</span>
                    <h2>{{ __('home.name') }}</h2>
                    <p>{{ __('home.firstAbout') }} </p>
                    <p> {{ __('home.secondAbout') }} </p>
                    <div class="notice">
                        <p>{{ __('home.notice') }} </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image" data-aos="fade-zoom-in" data-aos-delay="100">
                    <img src="assets/img/all-img/Success-video-image.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ---------- end about section ------------------------ --}}
<!-- Start vision Area -->
<div class="faculty-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <div class="text title-anim">
                        <div class="icon-box rounded-circle d-flex align-items-center justify-content-center mb-4">
                            <i class="fas fa-eye text-white fs-3"></i>
                        </div>
                        <h3>{{ __('home.visionHeader') }}</h3>
                        <p>{{ __('home.Vision') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="200">
                    <div class="text title-anim">
                        <div class="icon-box rounded-circle d-flex align-items-center justify-content-center mb-4">
                            <i class="fas fa-bullseye text-white fs-3"></i>
                        </div>
                        <h3>{{ __('home.missionHeader') }}</h3>
                        <p>{{ __('home.mission') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End vision Area -->

<!-- Start why sae Area -->
<div class="academics-area ptb-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-anim">{{ __('home.whyTitle') }}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                    <h4>{{ __('home.whyFirstTitle') }}</h4>
                    <p>{{ __('home.whyFirstP') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="200">
                    <h4>{{ __('home.whySecondTitle') }}</h4>
                    <p>{{ __('home.whySecondP') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ __('home.whyThirdTitle') }}</h4>
                    <p>{{ __('home.whyThirdP') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End why sae Area -->

<!-- Start Campus Area 2 -->
<div class="campus-area-2 pt-100">
    <div class="container-fluaid">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>{{ __('home.studioTitle') }}</p>
            </div>
            <h2>{{ __('home.studioP') }}</h2>
        </div>

        <div class="campus-slider owl-carousel owl-theme">
            <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/all-img/campus-image-1.png" alt="image">
                <div class="content">
                    <h2>Neve 88RS Studio</h2>
                    <a class="default-btn" href="{{ route('booking') }}">{{ __('home.bookingButton') }}</a>
                </div>
            </div>
            <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/all-img/campus-image-2.png" alt="image">
                <div class="content">
                    <h2>O2R 2.0 Studio (Stereo)</h2>
                    <a class="default-btn" href="{{ route('booking') }}">{{ __('home.bookingButton') }}</a>
                </div>
            </div>
            <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/all-img/campus-image-3.png" alt="image">
                <div class="content">
                    <h2>Apollo Studio</h2>
                    <a class="default-btn" href="{{ route('booking') }}">{{ __('home.bookingButton') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Campus Area -->
{{-- <div class="academics-area ptb-100" >
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <div class="sub-title">
                        </div>
                        <h2 class="title-anim">Where Excellence Meets Opportunity</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                                <img src="assets/img/icon/education-1.png" alt="icon">
                                <h4>Education Services</h4>
                                <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                                <a href="academics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="academics-item" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/icon/education-2.png" alt="icon">
                                <h4>International Hubs</h4>
                                <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                                <a href="academics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                <img src="assets/img/icon/education-3.png" alt="icon">
                                <h4>Bachelor’s and Master’s</h4>
                                <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                                <a href="academics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

<!-- Start How Work Area -->
<div class="academics-area ptb-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-anim">{{ __('service.howTitle') }}</h2>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-4 col-sm-6 col-md-6 mt-md-4 ">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                    <h4>{{ __('service.cardTitle1') }}</h4>
                    <p>{{ __('service.cardP1') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 mt-md-4 ">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="200">
                    <h4>{{ __('service.cardTitle2') }}</h4>
                    <p>{{ __('service.cardP2') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6  mt-md-4 ">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ __('service.cardTitle3') }}</h4>
                    <p>{{ __('service.cardP3') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 mt-lg-4 mt-md-4  ">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ __('service.cardTitle4') }}</h4>
                    <p>{{ __('service.cardP4') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 mt-lg-4  mt-md-4 ">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ __('service.cardTitle5') }}</h4>
                    <p>{{ __('service.cardP5') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End How Work Area -->
<!-- Start country Area 3 -->
<div class="faculty-area-3 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
                <h2>{{ __('home.partnerships') }}</h2>
                <p>{{ __('home.countryP') }}</p>
                <div class="row justify-content-around">
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country1') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country2') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country3') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country4') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country5') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country6') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country7') }}</h4>
                    </div>
                    <div class="col-lg-2 col-sm-5 country-card ">
                        <h4>{{ __('home.country8') }}</h4>
                    </div>
                </div>
                <a class="another-btn"  href="https://jordan.sae.edu/" target="_blank">{{ __('home.link') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- End country Area 3 -->
@include('layout.footer')
