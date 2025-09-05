@extends('frontend.master')
@section('title', 'About')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('storage/' . @$about->image) }});background-size: cover; background-repeat: no-repeat;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">About</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>About</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2 class="mb-4">{{ $about->title }}</h2>
                    </div>
                    <div>
                        <p>{!! $about->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
