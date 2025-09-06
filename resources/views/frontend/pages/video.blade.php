@extends('frontend.master')
@section('title', 'Video')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/assets/images/services.jpg') }});background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Video</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                            <span>Video</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
               <h1>Coming Soon...</h1>
            </div>
        </div>
    </section>
@endsection
