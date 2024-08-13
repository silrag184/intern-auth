<aside class="sidebar-wrapper">
    <div class="iconmenu bg-gradient-info">
        <div class="nav-toggle-box bg-gradient-info">
            <div class="nav-toggle-icon "><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Testimonial">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-testimonial" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Teachers">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-teachers" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Applicants">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-applicants" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu bg-light-info">
        <div class="brand-logo bg-gradient-info">
            <img src="{{ asset('back-end-assets') }}/assets/images/avatars/logoIST.png" width="50" height="50" alt="IST"/>
            <small class="text-white">Institute of Science and Technology</small>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Dashboards</h5>
                        </div>
                        <small class="mb-0 text-dark">Some placeholder content</small>
                    </div>
                    <a href="{{ route('dashboard') }}" class="list-group-item text-dark"><i class="bi bi-cart-plus"></i>Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Categories</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add.category') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add Category</a>
                    <a href="{{ route('manage.category') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Category</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Blog</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('blogs.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add Blog</a>
                    <a href="{{ route('blogs.index') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Blog</a>
                </div>
            </div>



            <div class="tab-pane fade" id="pills-testimonial">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Testimonial</h5>
                        </div>
                        <small class="mb-0">Adding Testimonials</small>
                    </div>
                    <a href="{{ route('testimonials.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add Testimonial</a>
                    <a href="{{ route('testimonials.index') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Testimonial</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-teachers">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Faculty Members</h5>
                        </div>
                        <small class="mb-0">Add Teacher's Names</small>
                    </div>
                    <a href="{{ route('teachers.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add Teacher's Name</a>
                    <a href="{{ route('teachers.index') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Teacher's</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-applicants">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0 text-orange">Applicants Information</h5>
                        </div>
                    </div>
                    <a href="{{ route('admission.applicants') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Applicants Information</a>
                </div>
            </div>
        </div>
    </div>
</aside>
