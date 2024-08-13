@extends('front-end.master')

@section('content')
    <div class="container py-4">
        <h1 class="text-dark text-center">আর্কিটেকচার টেকনোলজি</h1>
    </div>
    <div class="container py-2">
        <p class="text-dark fs-5"><strong class="text-dark">ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রম কোডঃ</strong> ১৫</p>
        <p class="text-dark fs-5"><strong class="text-dark">টেকনোলজি কোডঃ</strong> ৬৬১</p>
        <p class="text-dark fs-5"><strong class="text-dark">টেকনোলজির নামঃ</strong> আর্কিটেকচার</p>
        <br>
        <p class="text-dark fs-5" style="text-align: justify;">আর্কিটেকচার ইঞ্জিনিয়ারিং এমন একটি কোর্স যেটি পরিবেশবান্ধব, প্রযুক্তি নির্ভর আবাসান পরিকল্পনা, নকশা, নিমার্ণ, অপারেশন সম্পর্কিত শিক্ষা কার্যক্রম
            এবং নিমার্ণ ব্যবস্থাপনা করে। একজন আর্কিটেক ইঞ্জিনিয়ার টেকসই এবং পরিবেশবান্ধব, বাস উপযোগী ভবন ও কাঠামোর বাস্তব ডিজাইনার।
            তিনি পরিবেশ ও সৌন্দর্য্য বিবেচনায় রেখে মানুষের বাসস্থান, কর্মস্থল, খেলার মাঠ, ব্রিজ, রাস্তা, পার্ক, ভাস্কর্য ইত্যাদি নকশা করেন।
            এছাড়া তিনি ডিজাইন গ্রাহকদের সঙ্গে একটি প্রকল্পের উদ্দেশ্য, প্রয়োজনীয়তা, বাজেট পর্যালোচনা, পূর্ব নির্ধারিত কাজের সার্ভিসগুলোর সম্ভাব্যতা যাচাই,
            পরিবেশগত প্রভাব, সাইট নির্বাচন ইত্যাদি প্রয়োজনীয়তাগুলো নির্দিষ্ট করেন। ডিজাইন গ্রাহককে একটি ডেমো স্ক্রেচ প্রস্তুত, বিল্ডিং কোড অনুসরণ,
            অগ্নী নির্বাপক এবং অন্যান্য অধ্যাদেশ পর্যালোচনা, পরিবর্তন ও পরিকল্পনার সুপারিশ করেন। একজন আর্কিটেক্ট হাউজ বিল্ডিং কর্পোরেশন,
            রিয়েল এস্টেট কোম্পানী, যে কোন সরকারি/বেসরকারি ইঞ্জিনিয়ারিং ডিপার্টমেন্টে উপ-সহকারী আর্কিটেক্ট, প্রজেক্ট সুপারভাইজার/ডেভেলপার হিসেবে
            তার ক্যারিয়ার শুরু করতে পারে।
        </p>
        <p class="text-dark fs-5"><strong class="text-dark">আর্কিটেকচার টেকনোলজি’র ল্যাবসমূহ:</strong></p>
        <p class="text-dark fs-5" style="text-align: justify;">
            ড্রইং ল্যাব, কম্পিউটার ল্যাব, ইলেকট্রিক্যাল ল্যাব, ফিজিক্স ল্যাব, কেমিস্ট্রি ল্যাব ইত্যাদি।
        </p>
        <img src="{{ asset('front-end-assets/img/architecture.jpg') }}" alt="architecture">
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5 mb-lg-0 project-link">
                <div class="col-lg-3">

                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('admission_eligibility') }}"><h4 class="text-dark text-center">ভর্তির যোগ্যতা</h4></a>
                    </div>
                    {{--                    <a class="btn btn-info btn-outline-warning" href="{{ route('admission_eligibility') }}"><h4 class="text-dark text-center">ভর্তির যোগ্যতা</h4></a>--}}
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('tuition_fee') }}"><h4 class="text-dark text-center">টিউশন ফি</h4></a>
                    </div>
                    {{--                    <a class="btn btn-info btn-outline-warning" href="{{ route('admission_eligibility') }}"><h4 class="text-dark text-center">টিউশন ফি</h4></a>--}}
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('scholarship') }}"><h4 class="text-dark text-center">বৃত্তি এবং উপবৃত্তি</h4></a>
                    </div>
                    {{--                    <a class="btn btn-info btn-outline-warning" href="{{ route('admission_eligibility') }}"><h4 class="text-dark text-center">বৃত্তি এবং উপবৃত্তি</h4></a>--}}
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" href="{{ route('contact') }}"><h4 class="text-dark text-center">যোগাযোগ</h4></a>
                    </div>
                    {{--                    <a class="btn btn-info btn-outline-warning" href="{{ route('contact') }}"><h4 class="text-dark text-center">যোগাযোগ</h4></a>--}}
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-dark text-center"><u>অন্যান্য টেকনোলজি</u></h1>
            </div>
        </div>
        <div class="row mb-5 mb-lg-0 py-4">
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('electrical') }}" class=""><img src="{{ asset('front-end-assets/img/electrical.jpeg') }}" alt="image" style="height: 304px; width: 415px;"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('computer') }}" class=""><img src="{{ asset('front-end-assets/img/computer.jpeg') }}" alt="image" style="height: 304px; width: 415px;"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('civil') }}" class=""><img src="{{ asset('front-end-assets/img/civil.jpg') }}" alt="image" style="height: 304px; width: 415px;"></a>
                </div>
            </div>
        </div>
        <div class="row mb-5 mb-lg-0 py-1">
            <div class="col-lg-4">
                <a href="{{ route('electrical') }}" class="btn btn-link w-100"><h4 class="text-danger text-justify">ইলেকট্রিক্যাল টেকনোলজি</h4></a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('computer') }}" class="btn btn-link w-100"><h4 class="text-danger text-justify">কম্পিউটার টেকনোলজি</h4></a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('civil') }}" class="btn btn-link w-100"><h4 class="text-danger text-justify">সিভিল টেকনোলজি</h4></a>
            </div>
        </div>
    </div>
@endsection
