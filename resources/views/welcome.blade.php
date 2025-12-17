<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Luminus for film making and media</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    {{-------------------------------- meta tags -------------------------}}
    <meta name="description" content="Kickstart your creative career with Luminus Education and SAE Institute Jordan. Offering accredited courses in film making, audio engineering, and media. Book professional studios and equipment online.">
    <meta name="keywords" content="SAE Jordan, Luminus Education, Film Making, Audio Engineering, Studio Booking Amman, Media Education, LTUC">
    <meta name="author" content="Luminus Education">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Luminus Education & SAE Jordan | Creative Media Leaders">
    <meta property="og:description" content="Kickstart your creative career. Explore accredited courses in film & audio or book professional studio time at SAE Institute Jordan.">
    <meta property="og:image" content="{{ asset('assets/images/sae.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Luminus Education & SAE Jordan">
    <meta name="twitter:description" content="Kickstart your creative career with Luminus Education and SAE Institute. Book professional studios and equipment in Amman.">
    <meta name="twitter:image" content="{{ asset('assets/images/sae.png') }}">


    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>



    <style>
        .select2-container .select2-selection--multiple {
            margin-bottom: 30px;
            height: 60px;
            color: #212529;
            border: 1px solid #EEEEEE;
            box-shadow: none;
            padding-left: 20px;
            margin-bottom: 30px;
            box-shadow: none;

        }

        /* Text style inside */
        .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            display: flex;
            gap: 5px;
        }

        /* Placeholder like Bootstrap */
        .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
            color: #000000;
        }

        /* Dropdown same as Bootstrap */
        .select2-container .select2-dropdown {
            border: 1px solid #EEEEEE;
            border-radius: 0.375rem;
            margin-top: -30px;
            background-color: #fff;
        }
    </style>


</head>

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
    <div class="navbar-area style-2" id="navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img class="logo-light" src="{{ asset('assets/images/logo.png') }}" alt="logo" width="200px ">
                    <img class="logo-dark" src="{{ asset('assets/images/logo.png') }}" alt="logo" width="200px">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <i class='bx bx-menu'></i>
                </a>
                <div class="collapse navbar-collapse justify-content-between">
                    {{-- <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="" class=" nav-link ">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactForm" class=" nav-link  ">
                                Contact Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class=" nav-link  ">
                                About Us
                            </a>
                        </li>
                    </ul> --}}
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                                {{-- <a href="{{route('ar')}}" class="default-btn">عربي</a> --}}
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
                    <a href="" class="accordion-link">
                        Home
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Responsive Navbar Area -->


<!-- Start  Banner  Area -->
<div class="banner-area-2 big-bg-2" id="home">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{ asset('assets/images/ltuc.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="banner-content-2">
            <div class="content">
                <span data-aos="fade-zoom-in" data-aos-delay="300">Global Leader in Creative & Technology </span>
                <h1 data-aos="fade-up" data-aos-delay="200">Luminus Education</h1>
                <p data-aos="fade-up" data-aos-delay="300">
                    Kickstart Your Creative & Tech Career
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
<div class="activities-area ptb-100">
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
</div>
<!-- End Campuses Area 2 -->


    <!-- Start Footer Area -->
    <div class="footer-area">

        <div class="copy-right-area style-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="cpr-left">
                            <p>Copyright© <a href="https://jordan.sae.edu/">SAE Institue</a>, All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="cpr-right gap-4 ">
                            <ul>
                                <li><a href="https://jordan.sae.edu/policies-and-procedures/" target="_blank">Privacy
                                        Policy</a></li>
                                <li><a href="https://jordan.sae.edu/policies-and-procedures/" target="_blank">Cookie
                                        Policy</a></li>
                            </ul>
                            <ul class="social-list">
                                <li><a href="https://www.facebook.com/saeamman/"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="https://www.instagram.com/saejordan/"><i class='bx bxl-instagram-alt'></i></a></li>
                                <li><a href="https://www.linkedin.com/in/sae-institute-amman-867029140/"><i class='bx bxl-linkedin-square'></i></a></li>
                                <li><a href="https://www.youtube.com/user/SAEAMMANJORDAN"><i class='bx bxl-youtube'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <div class="go-top active">
        <i class="bx bx-up-arrow-alt"></i>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        </script>
    @endif
    <!-- Links of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

