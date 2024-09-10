<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Contact Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/templatemo-topic-listing.css')}}" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="topics-listing.html">Topics Listing</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="testimonials.html">Our Client Says</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="../admin/register.html" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Testimonials</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="section-padding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="mb-4">What Our clients Says?</h2>
                        </div>
                    </div>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="{{asset('assets/images/testimonials/janis-dzenis-jkvE9uJN3jk-unsplash.jpg')}}"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="{{asset('assets/images/testimonials/janis-dzenis-oPRubjbiqKI-unsplash.jpg')}}"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="{{asset('assets/images/testimonials/rocky-xiong-UE04nFCgDUE-unsplash.jpg')}}"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                    </div>
                </div>
            </section>

           
        </main>

        @include('public.includes.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

    </body>
</html>