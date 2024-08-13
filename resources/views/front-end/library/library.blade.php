@extends('front-end.master')

@section('content')
    <!-- text start -->
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('front-end-assets/img/library/lib1.jpg') }}" class="w-100" alt="library">
            </div>
            <div class="col-lg-8">
                <h1 class="text-dark">লাইব্রেরি</h1>
                <p class="text-dark text-justify fs-5">ইনস্টিটিউট অফ সায়েন্স অ্যান্ড টেকনোলজি সাম্প্রতিক প্রবণতা সহ ব্যবসা, বিজ্ঞান এবং প্রযুক্তি সম্পর্কিত বইগুলি সহ একটি
                    সু-রক্ষণশীল লাইব্রেরি দিয়ে সজ্জিত। ইনস্টিটিউট অফ সায়েন্স অ্যান্ড টেকনোলজিতে দেওয়া কোর্সের পাঠ্যক্রমের সাথে প্রাসঙ্গিক
                    প্রায় ১০,০০০ বই এবং জার্নাল। ইনস্টিটিউট অব সায়েন্স অ্যান্ড টেকনোলজি তথ্যের সর্বোত্তম উৎস থাকার জন্য গর্ব করে যা
                    শিক্ষার্থীদের তাদের অধ্যয়নের ক্ষেত্রে সর্বশেষ বিকাশের সাথে সমানে রাখতে সক্ষম করে।
                </p>
            </div>
        </div>
    </div>
    <section class="card-history py-5">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/library1.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/library1.JPG')}}" style="height: 200px; width: 300px" >
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib1.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib1.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib2.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib2.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib8.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib8.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib4.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib4.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib5.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib5.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib6.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib6.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib7.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib7.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- text end -->

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
