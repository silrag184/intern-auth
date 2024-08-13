<!-- Topbar Start -->
<div class="container-fluid topbar-top bg-warning">
    <div class="container">
        <div class="d-flex justify-content-between topbar py-2">
            <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>Dhanmondi (East of Sankar Bus Stand), Dhaka 1209.</a>
                <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+8801726937910</a>
                <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>ist50157@gmail.com</a>
            </div>
{{--            <div class="text-end pe-4 me-4 border-end border-dark search-btn">--}}
{{--                <div class="search-form">--}}
{{--                    <form method="post" action="index.html">--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="d-flex">--}}
{{--                                <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>--}}
{{--                                <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex align-items-center justify-content-center topbar-icon">
                <a href="https://www.facebook.com/istdiploma.edu.bd" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                <a href="#" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                <a href="#" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                <a href="#" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xl navbar-expand-xxl navbar-dark bg-white">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <h4 class="mb-0" style="color: #E67E22; font-min-size: 3vm;"><img src="{{ asset('front-end-assets') }}/img/logoIST.png" height="50px" width="50px">Institute of Science & Technology</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"  aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-n3 col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto" id="navbarCollapse">
            <ul class="navbar-nav ms-5">
                <li class="nav-item active"><a class="nav-link text-dark" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Academics</a>
                    <ul class="dropdown-menu bg-warning">
                        <li> <a class="dropdown-item" href="#">Diploma in Engineering &raquo; </a>
                            <ul class="submenu dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="{{ route('architecture') }}">Architecture Technology</a></li>
                                <li><a class="dropdown-item" href="{{ route('computer') }}">Computer Technology</a></li>
                                <li><a class="dropdown-item" href="{{ route('electrical') }}">Electrical Technology</a></li>
                                <li><a class="dropdown-item" href="{{ route('civil') }}">Civil Technology</a></li>
                            </ul>
                        </li>
                        <li> <a class="dropdown-item" href="https://ist.edu.bd/department-of-computer-science-and-engineering/">Computer Science and Engineering</a></li>
                        <li><a class="dropdown-item" href="https://ist.edu.bd/department-of-electronics-and-communication-engineering/">Electronics and Communication Engineering</a></li>
                        <li><a class="dropdown-item" href="https://ist.edu.bd/department-of-business-administration/">Bachelor of Business Administration</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown myDropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Admission Procedure</a>
                    <ul class="dropdown-menu bg-warning">
                        <li><a href="{{ route('admission_eligibility') }}" class="dropdown-item">Admission Eligibility</a></li>
                        <li><a href="{{ route('admission_process') }}" class="dropdown-item">Admission Process</a></li>
                        <li><a href="{{ route('tuition_fee') }}" class="dropdown-item">Tuition fee Structure</a></li>
                        <li><a href="{{ route('scholarship') }}" class="dropdown-item">Scholarships and Stipends</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown myDropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Clubs</a>
                    <ul class="dropdown-menu bg-warning">
                        <li> <a class="dropdown-item" href="{{ route('pcist') }}">Programming Club of IST (PcIST)</a></li>
                        <li><a class="dropdown-item" href="{{ route('ecrcist') }}">Electronics, Communication & Robotics Club of IST (ECRC)</a></li>
                        <li><a class="dropdown-item" href="https://ist.edu.bd/business-and-communication-club-bcc/">Business and Communication Club (BCC)</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">About Us</a>
                    <ul class="dropdown-menu bg-warning">
                        <li><a href="{{ route('about') }}" class="dropdown-item">About Us</a></li>
                        <li> <a class="dropdown-item" href="#">Facilities &raquo; </a>
                            <ul class="submenu dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="{{ route('library') }}">Library</a></li>
                                <li><a class="dropdown-item" href="https://ist.edu.bd/computer-lab/">Computer Lab</a></li>
                                <li><a class="dropdown-item" href="https://ist.edu.bd/ece-lab/">ECE Lab</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('team') }}" class="dropdown-item">Faculty Members</a></li>
                        <li><a href="{{ route('blog') }}" class="dropdown-item">Blog Post</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link text-dark">Contact</a></li>
            </ul>
        </div>
        <!-- navbar-collapse.// -->
    </div>
    <!-- container-fluid.// -->
</nav>
<!-- Navbar End -->
