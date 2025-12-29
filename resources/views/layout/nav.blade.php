<body>

    <!-- preloader -->
    <div class="preloader-container" id="preloader">
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
    </div>
    <!-- preloader -->

    <!--  Navbar Area  -->
    <div class="navbar-area style-2" id="navbar" dir="ltr">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img class="logo-light" src="{{ asset('assets/images/logo.png') }}" alt="logo" width="125px ">
                    <img class="logo-dark" src="{{ asset('assets/images/logo.png') }}" alt="logo" width="125px">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <i class='bx bx-menu'></i>
                </a>
                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class=" nav-link ">
                                {{ __('nav.home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service') }}" class=" nav-link  ">
                                {{ __('nav.service') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ourWork') }}" class=" nav-link  ">
                                {{ __('nav.ourWork') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('booking') }}" class=" nav-link  ">
                                {{ __('nav.booking') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class=" nav-link  ">
                                {{ __('nav.contact') }}
                            </a>
                        </li>


                    </ul>
                    <div class=" d-flex align-items-center ">
                        <div class="option-item">
                            <div class="nav-btn">
                                @if (app()->getLocale() == 'ar')
                                    <a href="{{ route('switchLang', 'en') }}" class="another-btn">English</a>
                                @else
                                    <a href="{{ route('switchLang', 'ar') }}" class="another-btn">عربي</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--  Navbar   -->

    <!--  Responsive Navbar  -->
    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
        id="navbarOffcanvas">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" style="color: white"> X </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a href="{{ route('index') }}" class="accordion-link">{{ __('nav.home') }}</a>
                </div>

                <div class="accordion-item">
                    <a href="{{ route('service') }}" class="accordion-link">{{ __('nav.service') }}</a>
                </div>

                <div class="accordion-item">
                    <a href="{{ route('ourWork') }}" class="accordion-link">{{ __('nav.ourWork') }}</a>
                </div>

                {{-- <div class="accordion-item">
                    <a href="{{route('howWork')}}" class="accordion-link">How We Work</a>
                </div> --}}

                {{-- <div class="accordion-item">
                    <a href="{{route('why')}}" class="accordion-link">Why SAE</a>
                </div> --}}

                <div class="accordion-item">
                    <a href="{{ route('booking') }}" class="accordion-link">{{ __('nav.booking') }}</a>
                </div>

                <div class="accordion-item">
                    <a href="{{ route('contact') }}" class="accordion-link">{{ __('nav.contact') }}</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Responsive Navbar Area -->
