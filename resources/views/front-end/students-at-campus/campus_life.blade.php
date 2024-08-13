@extends('front-end.master')

@section('content')
    <div class="container py-4">
        <h1 class="text-dark text-center">Some Photos of Campus</h1>
    </div>
    <section class="card-history py-5">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/library1.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/library1.JPG')}}" style="height: 200px; width: 300px" >
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib1.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib1.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib2.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib2.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib8.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib8.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib4.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib4.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib5.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib5.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib6.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib6.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 wow bounceIn" data-wow-duration="1s">
                    <a href="{{asset('front-end-assets/img/library/lib7.JPG')}}" class="card__item fresco" data-fresco-group="gallery" >
                        <img src="{{asset('front-end-assets/img/library/lib7.JPG')}}" style="height: 200px; width: 300px">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
