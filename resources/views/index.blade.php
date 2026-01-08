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
                <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
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
               <a href="{{ url('/contact') }}" class="nav-link">Contact Now <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</nav>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                   <img class="w-100" src="{{ asset('img/carousel-1.png') }}" alt="Image">
                   <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Local expertise in WNY climate and tree species</h1>
                                    <a href="{{ url('/services') }}" class="btn btn-primary py-sm-3 px-sm-4">Oue Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.png') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Transform Your Landscape with Expert Tree Care</h1>
                                    <a href="{{ url('/services') }}" class="btn btn-primary py-sm-3 px-sm-4"> More Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-dollar-sign text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>No Hidden Cost</h4>
                            <span>Transparent Pricing With No Surprises</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Dedicated Team</h4>
                            <span>Certified Arborists & Tree Experts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-phone text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>24/7 Availability</h4>
                            <span>Emergency Tree Services Anytime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Feature End -->


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


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Buffalo Tree Soldiers provides professional tree services backed by years of local expertise. Our certified arborists and dedicated team ensure your trees are healthy, safe, and beautifully maintained. We combine knowledge of WNY climate with sustainable practices to deliver reliable and efficient solutions for residential and commercial properties.</p>
                    <a class="btn btn-primary py-3 px-4" href="{{ url('/contact') }}">Contact Now</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


   
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Services</p>
            <h1 class="display-5 mb-5">Professional Tree & Landscaping Services</h1>
        </div>
        <div class="row g-4">
            <!-- Tree Removal -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service1.png') }}" alt="Tree Removal">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-tree fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Tree Removal</h4>
                        <p class="mb-4">Safe and efficient tree removal for residential and commercial properties, minimizing risk and property damage.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- Pruning & Trimming -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service2.png') }}" alt="Pruning & Trimming">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-cut fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Pruning & Trimming</h4>
                        <p class="mb-4">Professional pruning to enhance tree health, shape, and safety, promoting strong growth and aesthetics.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- Planting & Landscaping -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service3.png') }}" alt="Planting & Landscaping">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-seedling fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Planting & Landscaping</h4>
                        <p class="mb-4">Design and implement beautiful landscapes and plantings tailored to the local environment.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- Stump Grinding -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service4.png') }}" alt="Stump Grinding">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-cog fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Stump Grinding & Removal</h4>
                        <p class="mb-4">Complete stump clearing space,preventing regrowth and removal to prevent hazards and improve the look of your yard.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- Emergency Tree Services -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service5.png') }}" alt="Emergency Tree Services">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Emergency Tree Services</h4>
                        <p class="mb-4">24/7 response for fallen or hazardous trees to protect your property and restore safety quickly.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- Tree Health & Inspection -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service6.png') }}" alt="Tree Health & Inspection">
                    </div>
                    <div class="service-text rounded p-5 text-center">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <i class="fas fa-search fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Tree Health & Inspection</h4>
                        <p class="mb-4">Certified arborists assess tree health, detect diseases, and recommend care for long-term vitality.</p>
                        <a class="btn btn-sm" href="{{ url('/services') }}"><i class="fa fa-plus text-orange me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->





    <!-- Quote Start -->
<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/carousel-2.png') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white rounded p-4 p-sm-5 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Buffalo Tree Soldiers - Expert Tree & Landscaping Services</h1>
                    <p class="fs-5 mb-4">
                        From tree removals and stump grinding to garden maintenance and urban landscaping, we provide reliable and professional services across Buffalo, NY. Our experienced team ensures safety, efficiency, and a beautiful outdoor space every time.
                    </p>
                    <p class="fs-6 mb-4 text-muted">
                        Serving residential and commercial clients with care and expertise. Available for consultations, emergency tree services, and ongoing maintenance plans.
                    </p>
                    <a class="btn btn-primary btn-lg px-4 py-3" href="{{ url('/contact') }}">Get Your Free Consultation</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->



    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service10.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Firewood Cutting</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service10.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service8.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Stump Removal</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service8.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service9.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Land Clearing</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service9.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service7.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Shrub Removal</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service7.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service11.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Hazardous Tree Removal</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service11.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('img/service12.png') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Ornamental Tree Care</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/service12.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

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
