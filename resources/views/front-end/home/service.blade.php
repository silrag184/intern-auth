@extends('front-end.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container text-center py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services</h5>
                <h1 class="display-5">Common Pest Control Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light rounded p-5 services-item">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 rounded-circle services-inner-icon">
                                <i class="fa fa-spider fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h4>Spiders</h4>
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                        <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="bg-light rounded p-5 services-item">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 rounded-circle services-inner-icon">
                                <i class="fa fa-spider fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h4 class="text-center">Mosquitos</h4>
                        <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                        <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="bg-light rounded p-5 services-item">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 rounded-circle services-inner-icon">
                                <i class="fa fa-spider fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h4 class="text-center">Rodents</h4>
                        <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                        <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="bg-light rounded p-5 services-item">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 rounded-circle services-inner-icon">
                                <i class="fa fa-spider fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h4 class="text-center">Termites</h4>
                        <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                        <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp" data-wow-delay=".3s">More Services</button>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>
                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="{{asset('front-end-assets')}}/img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="{{asset('front-end-assets')}}/img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="{{asset('front-end-assets')}}/img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="{{asset('front-end-assets')}}/img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testiminial End -->
@endsection
