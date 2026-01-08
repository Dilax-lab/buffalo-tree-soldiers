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
                <a href="{{ url('/about') }}" class="nav-link">About</a>
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
               <a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact Now <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</nav>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Info & Form -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Contact Us</p>
                <h1 class="display-5 mb-5">Get in Touch With Buffalo Tree Soldiers</h1>
                <p class="mb-4">
                    Have questions about our tree care, landscaping, or garden services? Reach out to us today, and our experts will get back to you promptly. Call, email, or fill out the form below.
                </p>
                
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Google Map -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1493565.3316306488!2d-80.20503462236078!3d43.01786574922044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBuffalo%20Tree%20Soldiers%2C%20Buffalo%2C%20NY!5e0!3m2!1sen!2slk!4v1767771686819!5m2!1sen!2slk"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



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
