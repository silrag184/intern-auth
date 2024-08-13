@extends('front-end.master')

@section('content')
    <!-- text start -->
    <div class="container text-center py-4">
        <img src="{{ asset('front-end-assets/img/ecrc1.png') }}" alt="">
    </div>
    <div class="container py-2">
        <h1 class="text-center text-dark fs-2"><b>ELECTRONICS, COMMUNICATION AND ROBOTICS CLUB OF IST (ECRC)</b></h1>
        <p class="text-justify text-dark fs-5 py-4">ইলেকট্রনিক্স, কমিউনিকেশন অ্যান্ড রোবোটিক্স ক্লাব অফ IST, সংক্ষেপে ECRC-IST হল ইনস্টিটিউট অফ সায়েন্স অ্যান্ড
            টেকনোলজির চারটি সক্রিয় ক্লাবের মধ্যে একটি। এটি নীতিবাক্য দ্বারা যায়, “শিখুন, তৈরি করুন, অন্বেষণ করুন”, তিনটি রহস্যময় শব্দের
            সংমিশ্রণ যা ECRC IST-এর কার্যক্রমকে স্পষ্টভাবে সংজ্ঞায়িত করে। 11ই জানুয়ারী, 2011-এ এটির অফিসিয়াল যাত্রা প্রথম শুরু হয়েছিল৷
            এর দৃষ্টিভঙ্গি হল “প্রযুক্তি বিশ্বকে নেক্সট করার জন্য প্রযুক্তি শেখা, তৈরি করা এবং অন্বেষণ করা” লক্ষ্যে নিজেকে নিবেদিত করা।
            ক্লাবটি প্রযুক্তি বিশ্বে বিশ্ববিদ্যালয়ের ভাবমূর্তিকে শক্তিশালী ও প্রসারে গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। এটি বিশ্ববিদ্যালয়ের বিভিন্ন গোষ্ঠীর
            শিক্ষার্থীদের মধ্যে সার্কিট, প্রোগ্রামিং এবং নতুন প্রযুক্তির ব্যবহারকে উৎসাহিত করে – তারা সবাইকে স্বাগত জানায়! ECRC IST-এর মূল উদ্দেশ্য
            হল ছাত্রদের তাদের আগামী জীবনের জন্য আত্মবিশ্বাসী করে তোলা যার মধ্যে রয়েছে তাদের কর্মজীবন, তাদের ব্যবহারিক ল্যাব সেমিনার,
            কর্মশালা, প্রকাশনার মাধ্যমে। এটি একটি প্ল্যাটফর্ম যা উচ্চাকাঙ্ক্ষা এবং অর্জনকারীদের সংযোগ করে। এটি দক্ষতা উন্নয়ন, উদ্ভাবন, সংযোগ
            এবং ধারণা ভাগ করে নেওয়ার একটি প্ল্যাটফর্ম। এটি IST-এর সমস্ত উত্সাহী ছাত্রদের জন্য তাদের সম্ভাবনা দেখাতে এবং এর মাধ্যমে তাদের
            দক্ষতা বিকাশের একটি প্ল্যাটফর্ম। ECRC এর নিজস্ব গঠনতন্ত্র রয়েছে এবং এর সদস্যদের জন্য সারা বছর ক্লাস ও সেমিনারের ব্যবস্থা করে।
            এটির নিজস্ব কোর্স মডিউল রয়েছে যা IST-এর শিক্ষার্থীদের জন্য 11টি দক্ষতা বিকাশের কোর্স নিয়ে গঠিত। এটি প্রকল্পের প্রদর্শনী, পোস্টার
            উপস্থাপনা, রোবোটিক্স এবং ইলেকট্রনিক্স অলিম্পিয়াডের ব্যবস্থাও করে। এটি সাধারণত প্রতি মাসে একটি কোর্স এবং শিক্ষার্থীদের জন্য একটি ব্রেন
            স্টর্মিং সেশনের ব্যবস্থা করে। এর কোর্স সেশন তিনটি সেশন নিয়ে গঠিত যা হল শীতকালীন সেশন (নভেম্বর-ফেব্রুয়ারি),
            গ্রীষ্মকালীন সেশন (মার্চ-জুন) এবং শীতকালীন সেশন (জুলাই-অক্টোবর)।
        </p>
    </div>
    <!-- text end -->
    <section class="card-history py-2">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc1.png')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc1.png')}}" style="height: 200px; width: 300px" >
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc2.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc2.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc3.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc3.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc4.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc4.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc5.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc5.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc6.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc6.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc7.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc7.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc8.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc8.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc9.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc9.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc10.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc10.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc11.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc11.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc12.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc12.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc13.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc13.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc14.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc14.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc15.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc15.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc16.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc16.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc17.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc17.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc18.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc18.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc19.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc19.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/ecrc20.jpg')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/ecrc20.jpg')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
            </div>
        </div>
    </section>




    <section class="py-5">
        <div class="container">
            <div class="row mb-5 mb-lg-0 project-link">
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('admission_eligibility') }}"><h4 class="text-dark text-center">ভর্তির যোগ্যতা</h4></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('tuition_fee') }}"><h4 class="text-dark text-center">টিউশন ফি</h4></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('scholarship') }}"><h4 class="text-dark text-center">বৃত্তি এবং উপবৃত্তি</h4></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('contact') }}"><h4 class="text-dark text-center">যোগাযোগ</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-dark text-center"><u>সকল টেকনোলজি</u></h1>
            </div>
        </div>
        <div class="row mb-5 mb-lg-0 py-4">
            <div class="col-lg-3">
                <div class="card">
                    <a href="{{ route('architecture') }}" class=""><img src="{{ asset('front-end-assets/img/architecture.jpg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="{{ route('electrical') }}" class=""><img src="{{ asset('front-end-assets/img/electrical.jpeg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="{{ route('computer') }}" class=""><img src="{{ asset('front-end-assets/img/computer.jpeg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="{{ route('civil') }}" class=""><img src="{{ asset('front-end-assets/img/civil.jpg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
        </div>
        <div class="row mb-5 mb-lg-0 py-1">
            <div class="col-lg-3">
                <a href="{{ route('architecture') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">আর্কিটেকচার টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3">
                <a href="{{ route('electrical') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">ইলেকট্রিক্যাল টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3">
                <a href="{{ route('computer') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">কম্পিউটার টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3">
                <a href="{{ route('civil') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">সিভিল টেকনোলজি</h5></a>
            </div>
        </div>
    </div>


@endsection
