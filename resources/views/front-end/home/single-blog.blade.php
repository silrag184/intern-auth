@extends('front-end.master')

@section('content')
    <!-- Page Header Start -->
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">News & Events</h5>
                <h1 class="display-5">Latest News & Events</h1>
            </div>

            <div class="blog-item">
                <img src="{{asset($blog->image)}}" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By {{ $blog->author_name }}</span>
                        <a href="{{ route('category.wise.blog',['categoryId'=>$blog->category_id]) }}"><span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{ $blog->categories->category_name }}</span></a>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y',strtotime($blog->created_at))  }}</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>{{ $blog->title }}</h4>
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
