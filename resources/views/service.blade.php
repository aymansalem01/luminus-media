@include('layout.header')
</head>
@include('layout.nav')

<!-- Start Section Banner Area -->
<div class="section-banner bg-1">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ __('service.title') }}</h2>
                <p data-aos="fade-up" data-aos-delay="200">{{ __('service.subTitle') }}</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->
<!-- Start services Area -->
<div class="campus-tour" style=" margin-top:100px">
    <div class="container-fluid p-0">
        {{-- 1 --}}
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{ __('service.serviceTitle1') }}</h2>
                    <p>{{ __('service.Service1') }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image cp-bg-1" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
        {{-- end 1 --}}
        {{-- 2 --}}
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{ __('service.serviceTitle2') }}</h2>
                    <p>{{ __('service.Service2') }}</p>
                </div>
            </div>
        </div>
        {{-- end 2 --}}
        {{-- 3 --}}
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{ __('service.serviceTitle3') }}</h2>
                    <p>{{ __('service.Service3') }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image cp-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
        {{-- end 3 --}}
        {{-- 4 --}}
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{ __('service.serviceTitle4') }}</h2>
                    <p>{{ __('service.Service4') }}</p>
                </div>
            </div>
        </div>
        {{-- end 4 --}}
        {{-- 5 --}}
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="100">
                    <h2>{{ __('service.serviceTitle5') }}</h2>
                    <p>{{ __('service.Service5') }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image cp-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
        {{-- end 5 --}}
    </div>
</div>
<!-- End services Area -->

<!-- Start work field Area -->
{{-- <div class="about-university-area pt-5">
    <div class="about-university">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-zoom-in" data-aos-delay="100">
                    <div class="academic-images">
                        <img src="assets/img/all-img/university-image.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="content">
                        <h2>Where Knowledge Meets Innovation</h2>
                        <div class="item">
                            <div class="item-content">
                                <div class="number">
                                    <h4>01</h4>
                                </div>
                                <h3>Regional Reach and Operations</h3>
                                <p>Luminus Film and Media operates in Jordan, with a broad regional reach extending
                                    across the Middle East and North Africa (MENA). We function through educational,
                                    production, and technical partnerships, executed via collaboration models grounded
                                    in active operations and knowledge exchange.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="number">
                                    <h4>02</h4>
                                </div>
                                <h3>Collaborative Strategy</h3>
                                <p>Our partnerships rely on close collaboration with local and regional institutions.
                                    This approach ensures that programs and projects are aligned with local contexts
                                    while adhering to accredited academic and operational standards.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="number">
                                    <h4>03</h4>
                                </div>
                                <h3>Partnership Activities and Expansion</h3>
                                <p>These collaborations encompass the execution of educational programs, production
                                    projects, and capacity building initiatives. Additionally, we focus on developing
                                    and operating SAE branches across the region through joint venture or licensing
                                    models, ensuring added value and long-term sustainability.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="number">
                                    <h4>04</h4>
                                </div>
                                <h3>Institutional Integration</h3>
                                <p>Our operations are deeply connected to the global SAE network and work in integration
                                    with Luminus Technical University College (LTUC) to deliver academic and applied
                                    programs within the technical and creative industries.</p>
                            </div>
                        </div>
                        <a class="default-btn black" href="admission.html">Explore Academic Programs</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}
<!-- End work field Area -->

{{-- Test section  --}}
<div class="col-lg-12 container pt-5">
    <h2 class="scope-heder">{{ __('service.scope') }}</h2>
    <div class="ac-overview">
        <div class="pera-dec">
            <div class="faq-content-2">
                <div class="faq-item">
                    <div class="faq-question">{{ __('service.header1') }}</div>
                    <div class="icon-container"><i class="bx bx-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p> {{__('service.paragraph1')}}</p>
                </div>
                <div class="faq-item">
                    <div class="faq-question">{{ __('service.header2') }}</div>
                    <div class="icon-container"><i class="bx bx-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p> {{__('service.paragraph2')}}</p>
                </div>
                <div class="faq-item">
                    <div class="faq-question">{{ __('service.header3') }}</div>
                    <div class="icon-container"><i class="bx bx-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p> {{__('service.paragraph3')}}</p>
                </div>
                <div class="faq-item">
                    <div class="faq-question">{{ __('service.header4') }}</div>
                    <div class="icon-container"><i class="bx bx-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p> {{__('service.paragraph4')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end test --}}
{{-- contact button --}}
<div class="faculty-area ptb-100">
    <div class="container">
        <div class="d-flex flex-column justify-between text-center gap-3">
            <div>
                <h2 style="color: white" >{{ __('service.academic') }}</h2>
            </div>
            <div>
                <p style="color: white">
                    {{ __('service.academicP') }}
                </p>
            </div>
            <div><a class=" default-btn  " style="border: var(--mainColor) solid 2px ">  SAE Institute – Amman</a> </div>

        </div>
    </div>
</div>
{{-- end  --}}
@include('layout.footer')
