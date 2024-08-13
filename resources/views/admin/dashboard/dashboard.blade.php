@extends('admin.master')

@section('content')

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Students</p>
                                <h4 class="my-1">2000</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 25% from last year</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Yearly Revenue</p>
                                <h4 class="my-1">$50K</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Teachers</p>
                                <h4 class="my-1">33 Teachers</h4>
                            </div>
                            <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Literacy Rate</p>
                                <h4 class="my-1">90.15%</h4>
                            </div>
                            <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->



        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Statistics</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center justify-content-center gap-2">
                            <div id="chart3"></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-circle-fill text-purple me-1"></i> B.Sc in CSE:<span class="me-1">102</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-info me-1"></i> B.Sc in ECE:<span class="me-1">90</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-pink me-1"></i> BBA:<span class="me-1">140</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i> Diploma All Department:<span class="me-1">50</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Total Departments/Courses</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="categories">
                            <div class="progress-wrapper">
                                <p class="mb-2">Diploma In Engineering <span class="float-end">85%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Bachelor of Science in CSE <span class="float-end">70%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Bachelor of Science in EEE <span class="float-end">66%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 66%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Bachelor of Business Administration <span class="float-end">76%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 76%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Masters of Science in CSE <span class="float-end">80%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Masters of Science in EEE <span class="float-end">65%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-voilet" role="progressbar" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Masters of Business Administration <span class="float-end">45%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-royal" role="progressbar" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


@endsection
