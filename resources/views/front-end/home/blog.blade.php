@extends('front-end.master')

@section('content')
    <!-- Page Header Start -->
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog</h5>
                <h1 class="display-5">Latest News & Events</h1>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">

                @foreach($blogs as $blog)
                    <div class="blog-item">
                        <img src="{{asset($blog->image)}}" class="img-fluid w-100 rounded-top" alt="">
                        <div class="rounded-bottom bg-light">
                            <div class="d-flex justify-content-between p-4 pb-2">
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By {{ $blog->author_name }}</span>
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{ $blog->categories->category_name }}</span>
                                <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ date('jS M Y',strtotime($blog->created_at))  }}</span>
                            </div>
                            <div class="px-4 pb-0">
                                <h4>{{ $blog->title }}</h4>
                                <p>{{ substr($blog->description,0,500) }}</p>
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                                <a href="{{ route('single.blog',['slug'=>$blog->slug]) }}" type="button" class="btn btn-primary border-0">Read More</a>
                                <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>Comments</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
