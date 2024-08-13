<header class="top-header">
    <nav class="navbar navbar-expand bg-gradient-info">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
        </div>
        <div class="search-toggle-icon d-xl-none ms-auto">
            <i class="bi bi-search"></i>
        </div>
        <form class="searchbar d-none d-xl-flex ms-auto">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-3">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center gap-1">
                            <img src="{{ asset('back-end-assets') }}/assets/images/avatars/logoIST.png" class="user-img" alt="">
                            <div class="user-name d-none d-sm-block text-orange">Institute of Science and Technology</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('back-end-assets') }}/assets/images/avatars/logoIST.png" alt="" class="rounded-circle" width="60" height="60">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">IST</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">Manager</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-user-profile.html">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>

                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
