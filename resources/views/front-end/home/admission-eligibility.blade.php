@extends('front-end.master')

@section('content')
    <!-- text start -->
    <div class="container py-4">
        <h2 class="text-dark text-left">ভর্তির যোগ্যতা (বাংলাদেশ কারিগরি শিক্ষাবোর্ডের নিয়ম অনুযায়ী)</h2>
    </div>
    <div class="container py-2">
        <ul>
            <li class="fs-5 text-dark"><p>ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষাক্রমে ভর্তি হওয়ার নূন্যতম যোগ্যতা এস.এস.সি বা সমমান(মাদ্রাসা,বি এম,ভোকেশনাল,উন্মুক্ত) পরীক্ষায় পাস।</p></li>
            <li class="fs-5 text-dark"><p>এইচ.এস.সি (ভোকেশনাল) উত্তীর্ণ শিক্ষার্থীরা ক্রেডিট ট্রান্সফারের মাধ্যমে শুণ্য আসনে ৪র্থ পর্বে ভর্তি হওয়ার সুযোগ পাবে।</p></li>
            <li class="fs-5 text-dark"><p>এইচ.এস.সি (বিজ্ঞান) উত্তীর্ণ শিক্ষার্থীরা শুণ্য আসনে ৩য় পর্বে ভর্তি হওয়ার সুযোগ পাবে।</p></li>
            <li class="fs-5 text-dark"><p>ইংরেজী ভাষায় বিদেশী শিক্ষার্থীর পাশাপাশি আগ্রহী দেশী শিক্ষার্থীরাও পড়াশুনা করতে পারবে।</p></li>
        </ul>
    </div>
    <!-- text end -->

    <section class="py-5">
        <div class="container">
            <div class="row mb-5 mb-lg-0 project-link">
                <div class="col-lg-3">
                    <div class="card">
                        <a class="btn btn-info btn-outline-warning" data-bs-target="#myModal" data-bs-toggle="modal"><h4 class="text-dark text-center">ভর্তি ফরম</h4></a>
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

    <!--    ** start modal  **-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content c-modal">
                <div class="modal-header">
                    <h1 class="modal-title text-dark">Admission Form</h1>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('save.admission') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="col-12">
                            <label class="form-label text-dark">Applicant's Ful Name</label>
                            <input type="text" name="s_name" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Subject You Want To Choose</label>
                            <br>
                            <select name="subject" id="academy-select" required>
                                <option value="">--Select Subject--</option>
                                <option value="cst">Diplioma in Computer Science & Techonology</option>
                                <option value="et">Diploma in Electrical Technology</option>
                                <option value="ct">Diploma in Civil Technology</option>
                                <option value="arct">Diploma in Architechture Technology</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Applicant's Mail</label>
                            <input type="text" name="s_mail" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Applicant's Contact Number</label>
                            <input type="number" name="s_number" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Academic Result of</label>
                            <br>
                            <select name="academy" id="academy-select" required>
                                <option value="">--Please choose an option--</option>
                                <option value="ssc">Secondary School Certificate (SSC)</option>
                                <option value="hsc">Higher Secondary Certificate (HSC)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Grade (GPA)</label>
                            <input type="text" name="s_result" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Address</label>
                            <input type="text" name="s_address" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure!')">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!--    ** end modal  **-->


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
