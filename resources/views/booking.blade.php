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

    .in-studio {
        text-align: center;
        margin-top: 70px;
        margin-bottom: 70px
    }

    .in-studio .header h1 {
        color: var(--whiteColor);
        padding-bottom: 20px
    }

    .in-studio .header span {
        border-bottom: solid var(--mainColor) 7px;
        border-radius: 2px;
        padding-bottom: 10px
    }

    .in-studio .card-holder {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 40px
    }

    .in-studio .card-holder .card {
        width: 23%;
        border-color: var(--placeholderColor);
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 20px;
        padding: 35px;
        background-color: transparent;
        text-align: start
    }

    @media screen and (max-width:900px) {
        .in-studio .card-holder {
            flex-wrap: wrap;
            justify-content: center
        }

        .in-studio .card-holder .card {
            width: 48%;
        }

        .in-studio .header span {
            border: none
        }
    }



    .in-studio .card-holder .card:hover {
        border-color: var(--mainColor)
    }

    .in-studio .card-holder .card i {
        color: var(--mainColor);
        font-size: 30px;
    }

    .in-studio .card-holder .card h4 {
        color: white;
        margin-bottom: 10px
    }

    .studios {
        margin: 70px 0;
    }

    .studios .header h2 {
        color: var(--mainColor);
    }

    .studios .card-holder {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
        margin-top: 60px;

    }

    .studios .card-holder .card {
        display: flex;
        flex-direction: column;
        width: 47%;
        background: transparent;
        border-color: var(--blackColor);
        border-radius: 20px
    }

    .studios .card-holder .card:hover {
        border-color: var(--mainColor);
    }

    .studios .card-holder .card:hover .card-image img {
        transform: scale(1.05)
    }

    .studios .card-holder .card .card-image {
        width: 100%;
        padding: 1px;
        border-radius: 25px;
    }

    .studios .card-holder .card .card-image img {
        width: 100%;
        height: 250px;
        border-radius: 20px;

    }

    .studios .card-holder .card .card-body {
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-content: space-between;

    }

    @media screen and (max-width:800px) {
        .studios .card-holder {
            justify-content: center
        }

        .studios .card-holder .card {
            width: 80%
        }

        .studios .card-holder .card .card-body {
            flex-direction: column;

        }
    }
    .bg-black {
    background-color: #020202;
}

.bg-dark {
    background-color: #0a0a0a !important;
}

.text-mainColor {
    color: var(--mainColor);
}

.form-control,
.form-select {
    border-radius: 0.5rem;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--mainColor);
    box-shadow: none;
}

.studio-option:hover {
    border-color: var(--mainColor);
    cursor: pointer;
}
option {
    background-color: #0a0a0a;
    color: #ffffff;
    border: 1px solid #333;
}
input{
    color: white
}
</style>
</head>
@include('layout.nav')
<!-- Hero Section -->
<section class="hero-section position-relative d-flex align-items-center">
    <!-- Background -->
    <div class="hero-bg">
        <img src="{{ asset('assets/images/equipment.png') }}" alt="Film Production Set">
        <div class="overlay"></div>
    </div>

    <!-- Content -->
    <div class="container position-relative z-2 text-center">


        <h1 class="display-1 fw-bold mb-4 text-white">
            SAE Institute Amman <br>
            <span class="main-color">Studios</span>
        </h1>

        <p class="lead text-white mb-5 mx-auto" style="max-width: 700px;">
            Luminus Film & Media executes TV production, animation, commercials,
            and diverse visual content projects within a professional environment.
        </p>

        <a href="#book" class="heroSection-btn">
            Book a Studio Now
        </a>
    </div>
</section>
<!-- END Hero Section -->

<hr style="border-color: var(--blackColor); border-width: 5px; ">
{{-- in studio section --}}
<section class="in-studio">
    <div class="container">
        <div class="header">
            <h1>What can be <span>done in</span> our studios?</h1>
        </div>
        <div class="card-holder">
            <div class="card">
                <div> <i class="fa-solid fa-microphone fa-lg "></i> </div>
                <div>
                    <h4>Music & Vocal Recording</h4>
                    <p>Full band sessions and high-fidelity vocal recordings.</p>
                </div>
            </div>
            <div class="card">
                <div> <i class="fa-solid fa-sliders "></i> </div>
                <div>
                    <h4>Mixing & Mastering</h4>
                    <p>Professional audio engineering using state-of-the-art equipment.</p>
                </div>
            </div>
            <div class="card">
                <div> <i class="fa-solid fa-video "></i> </div>
                <div>
                    <h4>Visual Production</h4>
                    <p>Interview filming, Chroma key (Green/Blue), and YouTube content.</p>
                </div>
            </div>
            <div class="card">
                <div> <i class="fa-solid fa-headphones "></i></div>
                <div>
                    <h4>Podcast & Voice Over</h4>
                    <p>Isolated and crisp environment for talk shows and VO.</p>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- end in studio section --}}
<hr style="border-color: var(--blackColor); border-width: 5px; ">
{{-- studios section --}}
<section class="studios">
    <div class="container">
        <div class="header">
            <h2>Available Studios & Facilities</h2>
        </div>
        <div class="card-holder">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/all-img/about-image-2.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>Neve 88RS Studio</h3>
                        <p>The main recording room for recording, mixing, and mastering, designed for high-end musical
                            and commercial productions.</p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Full Band Recording</li>
                                <li>Professional Vocal Sessions</li>
                                <li>Mixing & Mastering</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Neve 88RS Analog Console</li>
                                <li>Spacious Live Room</li>
                                <li>Industry Standard Microphones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/images/o2r.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>O2R 2.0 Studio (Stereo)</h3>
                        <p>Flexible studio for recording, mixing, mastering, and stereo post-production.
                        </p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Vocal Overdubs</li>
                                <li>Stereo Mixing</li>
                                <li>Content Creators</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Yamaha O2R Console</li>
                                <li>Tuned Acoustic Treatment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/all-img/about-image-2.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>O2R 5.1 Studio (Surround)</h3>
                        <p>Dedicated studio for surround sound work and post-production for film and TV.</p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4 ">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Full Band Recording</li>
                                <li>Professional Vocal Sessions</li>
                                <li>Mixing & Mastering</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Neve 88RS Analog Console</li>
                                <li>Spacious Live Room</li>
                                <li>Industry Standard Microphones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/all-img/about-image-2.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>Apollo Studio</h3>
                        <p>Compact and efficient studio for pre-production and light production tasks.</p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Full Band Recording</li>
                                <li>Professional Vocal Sessions</li>
                                <li>Mixing & Mastering</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Neve 88RS Analog Console</li>
                                <li>Spacious Live Room</li>
                                <li>Industry Standard Microphones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/all-img/about-image-2.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>Podcast Studio</h3>
                        <p>Dedicated space for producing podcasts, talk shows, and educational content.</p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Full Band Recording</li>
                                <li>Professional Vocal Sessions</li>
                                <li>Mixing & Mastering</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Neve 88RS Analog Console</li>
                                <li>Spacious Live Room</li>
                                <li>Industry Standard Microphones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/all-img/about-image-2.png') }}" alt="">
                </div>
                <div class="card-body gap-4">
                    <div class="">
                        <h3>Green & Blue Screen Studios</h3>
                        <p>Chroma Key studios for controlled and precise filming.</p>
                    </div>
                    <div class="d-flex justify-content-between  text-white border-top pt-4">
                        <div class="">
                            <h6>Suitable for:</h6>
                            <ul>
                                <li>Full Band Recording</li>
                                <li>Professional Vocal Sessions</li>
                                <li>Mixing & Mastering</li>
                            </ul>
                        </div>
                        <div class="">
                            <h6>Equipment:</h6>
                            <ul>
                                <li>Neve 88RS Analog Console</li>
                                <li>Spacious Live Room</li>
                                <li>Industry Standard Microphones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</section>
{{-- end studios section --}}
<hr style="border-color: var(--blackColor); border-width: 5px; ">

{{-- booking Form  --}}
<section id="booking" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-dark border border-secondary rounded-4 p-4 p-md-5 shadow-lg">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h2 class="fw-bold  mb-3 main-color">{{ __('form.booking') }}</h2>
                    </div>
                    <form class="row g-4" id="book">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label text-white">
                                {{ __('form.full_name') }} <span class="text-mainColor">*</span>
                            </label>
                            <input type="text" class="form-control  bg-transparent"
                                placeholder="First and Last Name" required>
                        </div>

                        <!-- Entity -->
                        <div class="col-md-6">
                            <label class="form-label text-white">
                                {{ __('form.Entity') }} <span class="text-mainColor">*</span>
                            </label>
                            <input type="text" class="form-control "
                                placeholder="Company Name or Freelancer" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label text-white">
                                {{ __('form.email') }} <span class="text-mainColor">*</span>
                            </label>
                            <input type="email" class="form-control  "
                                placeholder="email@example.com" required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label text-white">{{ __('form.phone') }}</label>
                            <input type="tel" class="form-control "
                                placeholder="+962 79 000 0000">
                        </div>

                        <!-- Studio Type -->
                        <div class="col-12">
                            <label class="form-label text-white mb-3">
                                {{ __('form.studio') }} <span class="text-mainColor">*</span>
                            </label>

                            <div class="row g-3">
                                <!-- Checkbox item -->
                                <div class="col-6 col-md-4 test">
                                    <label
                                        class="w-100 border  rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">Neve 88RS</span>
                                    </label>
                                </div>

                                <div class="col-6 col-md-4">
                                    <label
                                        class="w-100 border rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">O2R 2.0</span>
                                    </label>
                                </div>

                                <div class="col-6 col-md-4 ">
                                    <label
                                        class="w-100 border  rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">O2R 5.1</span>
                                    </label>
                                </div>

                                <div class="col-6 col-md-4">
                                    <label
                                        class="w-100 border  rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">Apollo</span>
                                    </label>
                                </div>

                                <div class="col-6 col-md-4">
                                    <label
                                        class="w-100 border  rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">Podcast</span>
                                    </label>
                                </div>

                                <div class="col-6 col-md-4">
                                    <label
                                        class="w-100 border  rounded p-3 d-flex align-items-center gap-2 studio-option">
                                        <input type="checkbox" class="form-check-input ">
                                        <span class="text-light small">Green / Blue Screen</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="col-md-6">
                            <label class="form-label text-white">
                                {{ __('form.start_date') }} <span class="text-mainColor">*</span>
                            </label>
                            <input type="date" class="form-control " required>
                        </div>

                        <!-- Duration -->
                        <div class="col-md-6">
                            <label class="form-label text-white">
                                {{ __('form.start_date') }} <span class="text-mainColor">*</span>
                            </label>
                            <input type="text" class="form-control "
                                placeholder="e.g. 4 hours, 2 days..." required>
                        </div>

                        <!-- Project Type -->
                        <div class="col-12">
                            <label class="form-label text-white">
                                {{ __('form.project_type') }} <span class="text-mainColor">*</span>
                            </label>
                            <select class="form-select bg-transparent text-white ">
                                <option selected disabled>Select Project Type</option>
                                <option>Music</option>
                                <option>Podcast</option>
                                <option>Film / Video</option>
                                <option>Digital Content</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <!-- Notes -->
                        <div class="col-12">
                            <label class="form-label text-white">{{ __('form.note') }}</label>
                            <textarea rows="4" class="form-control "
                                placeholder="Do you need a sound engineer? Specific equipment?"></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="col-12 pt-3">
                            <button type="submit"
                                class=" w-100 py-3 fw-bold d-flex justify-content-center align-items-center gap-2 default-btn">

                                {{ __('form.booking_button') }}
                            </button>

                            <p class="text-muted small mt-3 text-center">
                                All bookings are subject to availability and scheduling, confirmed officially by the
                                studio team.
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@include('layout.footer')
