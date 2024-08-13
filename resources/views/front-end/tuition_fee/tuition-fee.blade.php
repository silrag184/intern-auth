@extends('front-end.master')

@section('content')
    <!-- table start -->
    <div class="container py-4">
        <h2 class="text-dark text-center"><u>ভর্তির সময় প্রদেয় টাকা</u></h2>
    </div>
    <div class="container py-2">
        <table border="1px" class="table-hover table col-3">
            <tr class="">
                <td class="text-dark"><strong>এসএসসি/সমমান পরীক্ষার ফলাফল</strong></td>
                <td class="text-dark"><strong>ভর্তি ফি ছাড়</strong></td>
                <td class="text-dark"><strong>ভর্তি ফি</strong></td>
                <td class="text-dark"><strong>ভর্তি ফরম, রেজিস্ট্রেশন ও অন্যান্য ফি বাবদ</strong></td>
                <td class="text-dark"><strong>মোট টাকা</strong></td>
            </tr>
            <tr>
                <td class="text-dark">৫.০০</td>
                <td class="text-dark">১০০%</td>
                <td class="text-dark">০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">১০০০</td>
            </tr>
            <tr>
                <td class="text-dark">৪.৭৫ – ৪.৯৯</td>
                <td class="text-dark">৭৫%</td>
                <td class="text-dark">১৫০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">২৫০০</td>
            </tr>
            <tr>
                <td class="text-dark">৪.৫০ – ৪.৭৪</td>
                <td class="text-dark">৫০%</td>
                <td class="text-dark">৩০০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">৪০০০</td>
            </tr>
            <tr>
                <td class="text-dark">৪.০০ – ৪.৪৯</td>
                <td class="text-dark">২৫%</td>
                <td class="text-dark">৪৫০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">৫৫০০</td>
            </tr>
            <tr>
                <td class="text-dark">২.০০ – ৩.৯৯</td>
                <td class="text-dark">প্রযোজ্য নয়</td>
                <td class="text-dark">৬০০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">৭০০০</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div class="container py-5">
        <h2 class="text-dark text-center"><u>৮ সেমিস্টারে মোট খরচ</u></h2>
    </div>
    <div class="container py-1">
        <table border="1px" class="col-xl-12 col-lg-12 col-md-12 col-sm-2 col-2">
            <tr>
                <td class="text-dark"><strong>টেকনোলজি</strong></td>
                <td class="text-dark"><strong>মাসিক বেতন</strong></td>
                <td class="text-dark"><strong>প্রতি সেমিস্টারে মাসিক বেতন</strong></td>
                <td class="text-dark"><strong>সেমিস্টার ফি</strong></td>
                <td class="text-dark"><strong>ল্যাব ও উন্নয়ন ফি</strong></td>
                <td class="text-dark"><strong>প্রতি সেমিস্টারে মোট খরচ</strong></td>
                <td class="text-dark"><strong>৪ বছর (৮ সেমিস্টার) সর্বমোট খরচ</strong></td>
            </tr>
            <tr>
                <td class="text-dark">আর্কিটেকচার, সিভিল, ইলেকট্রিক্যাল</td>
                <td class="text-dark">১২০০</td>
                <td class="text-dark">১২০০ x ৬ = ৭২০০</td>
                <td class="text-dark">৬০০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">= ১৪২০০</td>
                <td class="text-dark">১৪২০০ x ৮ = ১,১৩,৬০০</td>
            </tr>
            <tr>
                <td class="text-dark">কম্পিউটার সাইন্স</td>
                <td class="text-dark">১৫০০</td>
                <td class="text-dark">১৫০০ x ৬ = ৯০০০</td>
                <td class="text-dark">৬০০০</td>
                <td class="text-dark">১০০০</td>
                <td class="text-dark">= ১৬০০০</td>
                <td class="text-dark">১৬০০০ x ৮ =১,২৮,০০০</td>
            </tr>
        </table>
    </div>

    <div class="container py-4">
        <p class="text-dark fs-5">বাংলাদেশ কারিগরি শিক্ষা বোর্ডের যাবতীয় ফি (ভর্তি ফরম, রেজিস্ট্রেশন ফি, ফরম ফিলাপ ফি, অভ্যন্তরীন পরীক্ষার ফি) এর অন্তর্ভূক্ত নয়।</p>
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
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <div class="card">
                    <a href="{{ route('architecture') }}" class=""><img src="{{ asset('front-end-assets/img/architecture.jpg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <div class="card">
                    <a href="{{ route('electrical') }}" class=""><img src="{{ asset('front-end-assets/img/electrical.jpeg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <div class="card">
                    <a href="{{ route('computer') }}" class=""><img src="{{ asset('front-end-assets/img/computer.jpeg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <div class="card">
                    <a href="{{ route('civil') }}" class=""><img src="{{ asset('front-end-assets/img/civil.jpg') }}" alt="image" style="height: 204px; width: 310px;"></a>
                </div>
            </div>
        </div>
        <div class="row mb-5 mb-lg-0 py-1">
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <a href="{{ route('architecture') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">আর্কিটেকচার টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <a href="{{ route('electrical') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">ইলেকট্রিক্যাল টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <a href="{{ route('computer') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">কম্পিউটার টেকনোলজি</h5></a>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-6">
                <a href="{{ route('civil') }}" class="btn btn-link w-100"><h5 class="text-danger text-justify">সিভিল টেকনোলজি</h5></a>
            </div>
        </div>
    </div>


@endsection
