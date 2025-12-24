@include('layout.header')
<style>
    .hero-section {
        min-height: 75vh;
        /* Full screen height */
        overflow: hidden;
        background-color: #000;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-bg .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top,
                rgba(0, 0, 0, .9),
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.35));
    }

    .z-2 {
        z-index: 2;
    }
</style>
</head>
@include('layout.nav')
<div>

</div>
<!-- Hero Section -->
<section class="hero-section position-relative d-flex align-items-center">
    <!-- Background -->
    <div class="hero-bg">
        <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=2025&auto=format&fit=crop"
            alt="Film Production Set">
        <div class="overlay"></div>
    </div>

    <!-- Content -->
    <div class="container position-relative z-2 text-center">


        <h1 class="display-1 fw-bold mb-4 text-white">
            Our Work in <span class="main-color">Production</span>
        </h1>

        <p class="lead text-white mb-5 mx-auto" style="max-width: 700px;">
            {{__('ourWork.first_paragraph')}}
        </p>

        <a href="#videos" class="heroSection-btn">
            {{__('ourWork.view_button')}}
        </a>
    </div>
</section>
{{-- service section  --}}
<div class="campus-tour ptb-70" style=" margin-top:100px">
    <div class="container-fluid p-0">
        {{-- 1 --}}
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{__('ourWork.tv_production_header')}}</h2>
                    <p>{{__('ourWork.tv_production_paragraph')}}</p>
                    <ul class="list-unstyled space-y-4">
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.tv_first')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check text-gold mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.tv_second')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check text-gold mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.tv_third')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image tv_production" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
        {{-- end 1 --}}
        {{-- 2 --}}
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="image commercial" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{__('ourWork.corporate_header')}}</h2>
                    <p> {{__('ourWork.corporate_paragraph')}} </p>
                    <ul class="list-unstyled space-y-4">
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>

                            <span class="text-light">{{__('ourWork.corporate_first')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>

                            <span class="text-light">{{__('ourWork.corporate_second')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>

                            <span class="text-light">{{__('ourWork.corporate_third')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- end 2 --}}
        {{-- 3 --}}
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{__('ourWork.cartoon_header')}}</h2>
                    <p>W{{__('ourWork.cartoon_paragraph')}}</p>
                    <ul class=" ">
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.cartoon_first')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.cartoon_second')}}</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="fa-regular fa-circle-check  mt-1 main-color"></i>
                            <span class="text-light">{{__('ourWork.cartoon_third')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image cartoon" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
        {{-- end 3 --}}
    </div>
</div>
{{-- end service section --}}
<hr style=" border-width: 5px; ">
<!-- Start why sae Area -->
<div class="academics-area ptb-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
        </div>
        <div class="row justify-content-center gap-4">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                    <h4>Model & Execution</h4>
                    <p>Flexible production models tailored for excellence:</p>
                    <div class="d-flex flex-column gap-3 ">
                        <div class=" second-color p-3 radius mt-1 ">
                            <p class="m-auto">Independent Production</p>
                        </div>
                        <div class=" second-color p-3 radius ">
                            <p class="m-auto">Executive Partnerships</p>
                        </div>
                        <div class=" second-color p-3 radius ">
                            <p class="m-auto">Joint Ventures & Institutional Support</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="200">
                    <h4>Production Setup</h4>
                    <p>Integrated solutions from planning to final delivery:</p>
                    <div class="d-flex gap-3 flex-wrap justify-content-around ">
                        <div class="second-color d-flex flex-column gap-2  w-45 radius pt-3   ">
                            <div class=""><i class="fa-solid fa-microphone main-color"></i></div>
                            <div class="">
                                <P>Pro Studios</P>
                            </div>
                        </div>
                        <div class="second-color d-flex flex-column gap-2 w-45 radius pt-3 ">
                            <div class=""><i class="fa-solid fa-tv main-color"></i></div>
                            <div class="">
                                <p>Industry Gear</p>
                            </div>
                        </div>
                        <div class="second-color d-flex flex-column gap-2 w-45 radius pt-3 ">
                            <div class=""><i class="fa-solid fa-users main-color"></i></div>
                            <div class="">
                                <p>Global Teams</p>
                            </div>
                        </div>
                        <div class="second-color d-flex flex-column gap-2  w-45 radius pt-3 ">
                            <div class=""><i class="fa-solid fa-graduation-cap main-color"></i></div>
                            <div class="">
                                <p>Integration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End why sae Area -->
<hr style=" border-width: 5px; ">
<!-- Start Success Area 2 -->
<div class="success-area success-area-2 ptb-100" id="videos">
    <div class="container">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>Selected Works</p>
            </div>
            <h1 class="text-white">Portfolio Highlights</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="success-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="image">
                        <img src="assets/img/all-img/success-image-1.png" alt="image">
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="university-life.html">
                                    <h4>Documentary</h4>
                                </a>
                                <h3>Title</h3>
                            </li>
                            <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="success-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="image">
                        <img src="assets/img/all-img/success-image-2.png" alt="image">
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="university-life.html">
                                    <h4>Commercial</h4>
                                </a>
                                <h3>Title</h3>
                            </li>
                            <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="success-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="image">
                        <img src="assets/img/all-img/success-image-3.png" alt="image">
                    </div>
                    <div class="content">

                        <ul>
                            <li><a href="university-life.html">
                                    <h4>Animation</h4>
                                </a>
                                <h3>Titlw</h3>
                            </li>
                            <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Success Area 2 -->


@include('layout.footer')
