<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Buffalo Tree Soldiers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>(716) 750-2030</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>buffalotreesoldiers@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0 bg-white">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-2 px-lg-5">
        <img src="{{ asset('img/logo.png') }}" class="logo-img" alt="Buffalo Tree Soldiers Logo">
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </div>
            <div class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
            </div>

            <div class="nav-item dropdown service-nav"><a href="{{ url('/services') }}"class="nav-link service-link d-inline-flex align-items-center"> Services</a>
               <a href="#"class="nav-link dropdown-toggle dropdown-toggle-split service-arrow d-inline-flex align-items-center" data-bs-toggle="dropdown"></a>
              <div class="dropdown-menu bg-light m-0">
                  <a href="{{ url('/services/') }}" class="dropdown-item">Emergency Tree Services</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Tree Removal & Cleanup</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Tree Maintenance & Health</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Tree Planting & Transplanting</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Disease & Pest Management</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Cabling & Bracing</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Consulting & Arborist Services</a>
                  <a href="{{ url('/services/') }}" class="dropdown-item">Specialty & Add-on Services</a>
              </div>
            </div>
            <div class="nav-item">
                <a href="{{ url('/gallery') }}" class="nav-link">Gallery</a>
            </div>

            <div class="nav-item">
               <a href="{{ url('/contact') }}" class="nav-link">Contact Now <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</nav>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{ asset('img/about.png') }}" alt="About Buffalo Tree Soldiers">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Buffalo Tree Soldiers – Experts in Tree Care & Landscaping</h1>
                <p class="mb-4">With years of experience in the Western New York area, Buffalo Tree Soldiers provides comprehensive tree services including emergency removal, pruning, health maintenance, and sustainable landscaping solutions. Our dedicated team ensures your trees and gardens are safe, healthy, and aesthetically beautiful.</p>
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-check text-primary me-2"></i>Emergency Tree Services</li>
                    <li><i class="fa fa-check text-primary me-2"></i>Tree Removal & Cleanup</li>
                    <li><i class="fa fa-check text-primary me-2"></i>Tree Planting & Transplanting</li>
                    <li><i class="fa fa-check text-primary me-2"></i>Disease & Pest Management</li>
                </ul>
                <a class="btn btn-primary py-3 px-4" href="{{ url('/about') }}">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/carousel-1.png') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Complated Works</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

<!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimonial</p>
                    <h1 class="display-5 mb-5">What Our Clients Say About Buffalo Trees Soldiers!</h1>
                    <p class="mb-4">We take pride in providing top-notch tree care, landscaping, and garden maintenance services. Here's what our clients have to say about our dedication and professionalism.</p>
                    <a class="btn btn-primary py-3 px-4" href="{{ url('/contact') }}">Contact Now</a>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <i class="fa fa-user fa-5x text-secondary mb-3"></i>
                            <p class="fs-5">“Buffalo Tree Soldiers is the real deal. They handled removals and stump grinding super quickly and did a flawless job. Hardworking!”</p>
                            <h4>— Tom & Maria Kowalski</h4>
                            <span>Hamburg, NY</span>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-user fa-5x text-secondary mb-3"></i>
                            <p class="fs-5">“Five stars! Fast, professional, and my yard looked perfect afterward. I’d recommend Buffalo Tree Soldiers to anyone in Western New York.”</p>
                            <h4>— Robert Chen</h4>
                            <span>Buffalo, NY</span>
                        </div>
                         <div class="testimonial-item">
                            <i class="fa fa-user fa-5x text-secondary mb-3"></i>
                            <p class="fs-5">“Fast emergency response after the storm saved our beautiful trees and home. Highly recommend Buffalo Tree Soldiers.”</p>
                            <h4>— Mark Stevens</h4>
                            <span>Orchard Park, NY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>58 Duerstein St, Buffalo, NY 14210.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(716) 750-2030</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>buffalotreesoldiers@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <p>Tree Removal Service</p>
                    <p>Cabling & Bracing</p>
                    <p>Arborist Consulting</p>
                    <p>Disease & Pest Management</p>
                    <p>Emergency Tree Services</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('/services') }}">Our Services</a>
                    <a class="btn btn-link" href="{{ url('/gallery') }}">Our Gallery</a>
                    <a class="btn btn-link" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('/contact') }}">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
    <!-- Logo -->
    <div class="mb-3">
        <img src="{{ asset('img/logo.png') }}" alt="Buffalo Tree Soldiers Logo" class="img-fluid" style="max-width: 150px;">
    </div>

    <!-- Short Description -->
    <p class="text-light small mb-4">
        Expert tree care and landscaping services in Buffalo. Trusted by our clients for quality, reliability, and professionalism.
    </p>

    <!-- Newsletter Input -->
    <div class="position-relative w-100">
        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Sign Up</button>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ url('/index') }}">Buffalo Tree Soldiers.</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Terms & Conditions.  Privacy Policy 
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
