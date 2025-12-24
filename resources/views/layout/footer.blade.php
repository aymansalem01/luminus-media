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
                            <li><a href="https://www.instagram.com/saejordan/"><i class='bx bxl-instagram-alt'></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/sae-institute-amman-867029140/"><i
                                        class='bx bxl-linkedin-square'></i></a></li>
                            <li><a href="https://www.youtube.com/user/SAEAMMANJORDAN"><i class='bx bxl-youtube'></i></a>
                            </li>
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
            background: '#000',
            color: '#fff',
            timer: 10000,
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
