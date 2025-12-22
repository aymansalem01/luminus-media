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

        <a href="#portfolio" class="heroSection-btn">
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
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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
                        <h3>O2R 2.0 Studio (Stereo)</h3>
                        <p>Flexible studio for recording, mixing, mastering, and stereo post-production.
                        </p>
                    </div>
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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
                        <h3>Neve 88RS Studio</h3>
                        <p>The main recording room for recording, mixing, and mastering, designed for high-end musical
                            and commercial productions.</p>
                    </div>
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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
                        <h3>Neve 88RS Studio</h3>
                        <p>The main recording room for recording, mixing, and mastering, designed for high-end musical
                            and commercial productions.</p>
                    </div>
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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
                        <h3>Neve 88RS Studio</h3>
                        <p>The main recording room for recording, mixing, and mastering, designed for high-end musical
                            and commercial productions.</p>
                    </div>
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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
                        <h3>Neve 88RS Studio</h3>
                        <p>The main recording room for recording, mixing, and mastering, designed for high-end musical
                            and commercial productions.</p>
                    </div>
                    <div class="d-flex justify-content-around  text-white border-top pt-4">
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

@include('layout.footer')
