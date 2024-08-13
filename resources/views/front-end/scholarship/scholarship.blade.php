@extends('front-end.master')

@section('content')
    <!-- table start -->
    <div class="container py-4">
        <h1 class="text-dark text-center"><u>বৃত্তি এবং উপবৃত্তি</u></h1>
        <br>
        <br>
        <ul>
            <li class="text-dark fs-5">আই.এস.টি’র লক্ষ্য শিল্প বা পেশা সংক্রান্ত জ্ঞান ছাত্রদের সঠিকভাবে প্রদান করা। প্রকৌশল ডিপ্লোমা একটি শিক্ষাগত প্রোগ্রাম, এখানে বাস্তব এবং দক্ষতা ভিত্তিক প্রশিক্ষনের উপর দৃষ্টি নিবদ্ধ করা হয়। যাতে একজন ছাত্র দক্ষতার সংঙ্গে পেশাগত জীবন সর্ম্পকে সঠিকভাবে প্রস্তুত হতে পারে। সকল ছাত্রছাত্রীরা STEP প্রজেক্টের অধীনে বিশ্বব্যাংকের স্টাইপেন্ড হিসাবে মাসিক ৮০০ টাকা পাবনে। (All Students will get monthly taka 800 as a stipend from world bank under Step project.)</li>
        </ul>
    </div>
    <div class="container py-4">
        <h3 class="text-dark text-left fs-5">শিক্ষা বৃত্তিঃ</h3>
        <br>
        <ul>
            <li class="text-dark fs-5">আর্থিক সহায়তা এবং টিউশন ফি ওয়েভার উপভোগ করার জন্য ডিপ্লোমা শিক্ষার্থীদের ৮০% ক্লাস উপস্থিতি থাকতে হবে।</li>
            <li class="text-dark fs-5">শিক্ষার্থীদের মধ্যে, স্বামী ও স্ত্রী, দুই ভাই, ভাই ও বোন এবং একই মা-বাবার দুই বোনকে তাদের শিক্ষা বৃত্তি দেওয়া হয় ।</li>
            <li class="text-dark fs-5">সেমিষ্টার ভিত্তিক সমাপনী পরিক্ষায় জি.পি.এ ৩.৫০ বা অধিক অর্জন করে ১ম ও ২য় স্থান অধিকারীকে বৃত্তি প্রদান করা হয়।</li>
            <li class="text-dark fs-5">সহোধর কোঠায় একজনের সেমিষ্টার ফি ৫০% শিক্ষা বৃত্তি প্রদান।</li>
        </ul>
    </div>

    <!-- table end -->

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
