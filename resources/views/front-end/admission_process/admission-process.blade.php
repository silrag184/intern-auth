@extends('front-end.master')

@section('content')
    <!-- table start -->
    <div class="container py-4">
        <h1 class="text-dark text-center"><u>ভর্তি প্রক্রিয়া</u></h1>
        <br>
        <br>
        <ul>
            <li class="text-dark fs-5">অফিস চলাকালীন সময়ে (সকাল ৯:০০ টা থেকে বিকাল ৫:০০) আএসটি অফিস হতে নির্ধারিত ফি এর বিনিময়ে ভর্তি ফরম সংগ্রহ করা যাবে।</li>
        </ul>
    </div>
    <div class="container py-4">
        <h3 class="text-dark text-left fs-5">ভর্তির ফরম জমা দেওয়ার জন্য যা যা লাগবে:</h3>
        <br>
        <ul>
            <li class="text-dark fs-5">সদ্য তোলা ৪ (চার) কপি পাসর্পো সাইজের রঙ্গিন ছবি।</li>
            <li class="text-dark fs-5">নম্বরপত্র ও প্রশসংসা পত্রের মূলকপি ও ফটোকপি।</li>
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
