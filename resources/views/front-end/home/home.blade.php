@extends('front-end.master')

@section('content')
    <!-- Carousel Start -->
    <section class="slider">
        <div class="container-fluid carousel px-0 mb-5 pb-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Fifth slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('front-end-assets')}}/img/IST-Building.JPG" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h3 class="text-warning text-center display-5 mb-4 animated slideInDown">Welcome To</h3>
                                <h2 class="text-center display-1 mb-5 animated slideInUp" style="color: #E67E22;">Institute of Science and Technology</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front-end-assets')}}/img/campus4.jpeg" class="img-fluid w-100" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front-end-assets')}}/img/campus1.JPG" class="img-fluid w-100" alt="Third slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h2 class="text-center display-4 mb-5 animated slideInRight" style="color: whitesmoke;">Feel Free To Visit Our Campus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front-end-assets')}}/img/campus3.jpg" class="img-fluid w-100" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front-end-assets')}}/img/campus2.jpg" class="img-fluid w-100" alt="Fifth slide">
                    </div>
                </div>
                <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/ist004.JPG" class="img-fluid h-100" alt="img">
                        <div class="bg-white experiences">
                            <h1 class="display-6">32</h1>
                            <h6 class="fw-bold">Years Of Experiences</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">About Us</h5>
                        <h1 class="display-5">যাত্রা শুরুর গল্প</h1>
                        <p class="fs-5" style="text-align: justify;">প্রতিটি মহান কৃতিত্ব একটি স্বপ্ন দিয়ে শুরু হয়, একটি দৃষ্টিভঙ্গি যা মানুষকে তাদের চিন্তাভাবনাকে একটি শক্তিশালী বাস্তবে রূপ দিতে অনুপ্রাণিত করে।
                            প্রতিটি মহান স্বপ্ন একজন স্বপ্নদর্শী দিয়ে শুরু হয়। আইএসটি প্রতিষ্ঠার নেপথ্যে স্বপ্নদ্রষ্টা ছিলেন অধ্যাপক আবদুস সালাম।
                            তিনি গভীরভাবে বিশ্বাস করতেন যে ‘বৈজ্ঞানিক চিন্তাধারা সমস্ত মানবজাতির সাধারণ ঐতিহ্য’ এবং তার স্বপ্ন ছিল যে উন্নয়নশীল বিশ্বের উপকৃত হওয়া উচিত এবং উন্নত বিশ্বের সমানভাবে সেই ঐতিহ্যে যথেষ্ট অবদান রাখতে পারে।</p>
                        <button type="button" class="btn btn-warning btn-outline-dark border-0 rounded-pill px-4 py-3 mt-5">
                            <a href="{{route('about')}}" class="text-white">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <section class="py-4">
        <div class="container">
            <div class="row">
                <!-- Accordion Start -->
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s">
                    <h2 class="text-center">কোর্স সমূহ</h2>
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#itemOne">
                                    <h5 class="text-dark">আর্কিটেকচার টেকনোলজি</h5>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#myAccordion" id="itemOne">
                                <div class="accordion-body">
                                    <p class="fs-6" style="text-align: justify;">পৃথিবীতে উন্নত রাষ্ট্রগুলো ক্রমেই উন্নত হচ্ছে এবং উন্নয়নশীর রাষ্ট্রগুলো উন্নতির দিকে ধাবিত হচ্ছে।
                                        রাষ্ট্র উন্নয়ন বলতে বুঝায় সে দেশের অর্থনৈতিক অবকাঠামো, যাতায়াত ব্যবস্থা উন্নয়ন এব ইমারতগুলোর উন্নয়ন।

                                    </p>
                                    <br>
                                    <h5><a href="{{ route('architecture') }}" class="text-center text-dark">বিস্তারিত</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#itemTwo">
                                    <h5 class="text-dark">ইলেকট্রিক্যাল টেকনোলজি</h5>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#myAccordion" id="itemTwo">
                                <div class="accordion-body">
                                    <p class="fs-6" style="text-align: justify;">
                                        বিজ্ঞানী ভোল্টা কর্তৃক Electricity আবিস্কারের পর থেকেই মূলতঃ আধুনিক সভ্যতার যাত্রা শুরু।
                                        Electricity ছাড়া আমাদের জীবন যেমন অচল, Electrical Technology ছাড়াও পৃথিবী তেমনি অচল। ফলে
                                        Electrical Technology এর চাহিদা ক্রমশই বৃদ্ধি পাচ্ছে।
                                    </p>
                                    <br>
                                    <h5><a href="{{ route('electrical') }}" class="text-center text-dark">বিস্তারিত</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#itemThree">
                                    <h5 class="text-dark">কম্পিউটার  টেকনোলজি</h5>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#myAccordion" id="itemThree">
                                <div class="accordion-body">
                                    <p class="fs-6" style="text-align: justify;">তথ্য প্রযুক্তি বর্তমান বিশ্বকে গ্লোবাল ভিলেজে পরিণত করেছে। ডিপ্লোমা ইন ইঞ্জিনিয়ারিং টেকনোলজি আপনাকে সামিল করবে এই কম্পিউটার প্রযুক্তিবিদদের প্রথম সারিতে।
                                        এই কম্পিউটার ডিপ্লোমা ডিগ্রী হবে অবারিত কম্পিউটার সম্পর্কীত কর্ম ক্ষেত্রে প্রবেশের আপনার প্রথম চাবিকাঠি।
                                    </p>
                                    <br>
                                    <h5><a href="{{ route('computer') }}" class="text-center text-dark">বিস্তারিত</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#itemFour">
                                    <h5 class="text-dark">সিভিল টেকনোলজি</h5>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#myAccordion" id="itemFour">
                                <div class="accordion-body">
                                    <p class="fs-6" style="text-align: justify;">পৃথিবীতে উন্নত রাষ্ট্রগুলো ক্রমেই উন্নত হচ্ছে এবং উন্নয়নশীর রাষ্ট্রগুলো উন্নতির দিকে ধাবিত হচ্ছে।
                                        রাষ্ট্র উন্নয়ন বলতে বুঝায় সে দেশের অর্থনৈতিক অবকাঠামো, যাতায়াত ব্যবস্থা উন্নয়ন এব ইমারতগুলোর উন্নয়ন।
                                    </p>
                                    <br>
                                    <h5><a href="{{ route('civil') }}" class="text-center text-dark">বিস্তারিত</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion End -->
                <div class="col-md-6 wow bounceInUp py-5" data-wow-duration="2s">
                    <div class="card-header bg-warning">
                        <h2 class="title text-center">নোটিশ বোর্ড</h2>
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="text-dark"><a href="" class="text-dark">2nd, 4th, and 6th Semester Update Class Routine August 2023</a></h5>
                    </div>
                    <div class="card-footer">
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y')  }}</span>
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="text-dark"><a href="" class="text-dark">1st, 5th and 7th Semester Architecture, Civil and Electrical Technology Practical Final Exam 2022</a></h5>
                    </div>
                    <div class="card-footer">
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y')  }}</span>
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="text-dark"><a href="" class="text-dark">1st, 5th and 7th Semester Practical Final Routine 2022</a></h5>
                    </div>
                    <div class="card-footer">
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y')  }}</span>
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="text-dark"><a href="" class="text-dark ">Free Computer Course offer For S.S.C examinee 2022</a></h5>
                    </div>
                    <div class="card-footer">
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y')  }}</span>
                    </div>
                    <br>
                    <button class="btn btn-primary " >সকল নোটিশ</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Start -->
    <!-- Services End -->


    <!-- Gallery Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Campus Gallery</h5>
                <h1 class="display-5">Gallery</h1>
            </div>
            <div class="row g-5">
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/library/library1.JPG" class="img-fluid h-100" alt="img">
                        <a href="{{ route('library') }}" class="fs-4 fw-bold text-center">Campus Library</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/computer.jpeg" class="img-fluid h-100" alt="img">
                        <a href="" class="fs-4 fw-bold text-center">Computer Lab</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/electrical.jpeg" class="img-fluid h-100" alt="img">
                        <a href="" class="fs-4 fw-bold text-center">Electrical Lab</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/pcIST1.jpeg" class="img-fluid h-100" alt="img">
                        <a href="{{ route('pcist') }}" class="fs-4 fw-bold text-center">PCIST</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/ecrc1.png" class="img-fluid h-100" alt="img">
                        <a href="{{ route('ecrcist') }}" class="fs-4 fw-bold text-center">ECRC</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/bcc1.jpg" class="img-fluid h-100" alt="img">
                        <a href="https://ist.edu.bd/business-and-communication-club-bcc/" class="fs-4 fw-bold text-center">BCC</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="{{asset('front-end-assets')}}/img/bcc1.jpg" class="img-fluid h-100" alt="img">
                        <a href="{{ route('campus_life') }}" class="fs-4 fw-bold text-center">Students at Campus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog</h5>
                <h1 class="display-5">Latest News & Events</h1>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">

                @foreach($blogs as $blog)
                <div class="blog-item">
                    <img src="{{asset($blog->image)}}" class="img-fluid w-100 rounded-top" alt="">
                    <div class="rounded-bottom bg-light">
                        <div class="d-flex justify-content-between p-4 pb-2">
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By {{ $blog->author_name }}</span>
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{ $blog->categories->category_name }}</span>
                            <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y',strtotime($blog->created_at))  }}</span>
                        </div>
                        <div class="px-4 pb-0">
                            <h4>{{ substr($blog->title,0,33) }}</h4>
                            <p>{{ substr($blog->description,0,49) }}</p>
                        </div>
                        <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                            <a href="{{ route('single.blog',['slug'=>$blog->slug]) }}" type="button" class="btn btn-primary border-0">Read More</a>
                            <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>Comments</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Call To Action Start -->
    <div class="container-fluid py-5 call-to-action wow fadeInLeft" data-wow-delay=".3s" style="margin: 6rem 0;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <img src="{{asset('front-end-assets')}}/img/IST_LOGO_new_downscaled.png" class="img-fluid w-100 rounded-circle p-5" alt="">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="text-start mt-4">
                        <h1 class="pb-4 text-white text-center">Welcome to Institute of Science and Technology</h1>
                    </div>
                    <p class="text-white text-center">১৯৯৩ সালে ধানমন্ডির নিরিবিলি পরিবেশে প্রতিষ্ঠিত হয় একটি অলাভজনক, বেসরকারী,
                        অরাজনৈতিক শিক্ষা প্রতিষ্ঠান ইন্সটিটিউট অব সাইন্স এন্ড টেকনোলজি (আই.এস.টি)- যার উদ্বোধন করেন প্রয়াত নোবেল
                        বিজয়ী বিজ্ঞানী প্রফেসর ড. আব্দুস সালাম। জন্মলগ্ন থেকে এ প্রতিষ্ঠান দেশে বিজ্ঞান ও প্রযুক্তি শিক্ষা বিস্তারের উল্লেখযোগ্য
                        অবদান রেখে চলেছে। আই.এস.টি থেকে পাশ করা ছাত্র-ছাত্রীগণ বর্তমানে দেশ-বিদেশের অনেক খ্যাতনামা প্রতিষ্ঠানে কর্মরত।
                        আমরা বিশ্বাস করি , “Education is a Commitment, Not a Business.”</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container-fluid py-5">
{{--            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">--}}
{{--                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>--}}
{{--                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>--}}
{{--            </div>--}}
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 fw-bold m-0">{{ $testimonial->description }}</p>
                        </div>
                        <div class="d-flex align-items-center  mb-5" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="{{asset($testimonial->image)}}" class="img-thumbnail rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0 text-center">{{$testimonial->name}}</h4>
                                <p class="mb-1 text-center">{{$testimonial->designation}}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testiminial End -->

    <!-- Faculty Members Start -->
    <div class="container-fluid py-4">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Faculty Members</h5>
                <h1 class="display-5 w-50 mx-auto">Our Teachers</h1>
            </div>
            <div class="row g-5">
                @foreach($teachers as $teacher)
                    <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded team-item">
                            <img src="{{asset($teacher->image)}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">{{$teacher->t_name}}</span><br>
                                <span class="fs-6 fw-bold">{{$teacher->t_designation}}</span>
                                <p class="text-muted text-center mb-0">{{ $teacher->t_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="container-fluid text-center ms-auto fs-5 wow fadeInUp " data-wow-delay=".9s">
                    <button type="button" class="btn btn-danger btn-outline-dark border-0 rounded-pill px-4 py-3 mt-5">
                        <a href="{{ route('team') }}" class="text-white">All Faculty Members</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Faculty Members End -->


@endsection
