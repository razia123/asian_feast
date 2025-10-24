@extends('frontend.master')
@section('title', 'Menu')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('frontend/assets/images/biriyani.jpg') }});background-size: cover; background-position: center; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Menu</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($categories->chunk(ceil($categories->count() / 2)) as $chunk)
                    <div class="col-md-6 mb-5 pb-3">
                        @foreach ($chunk as $category)
                            <h3 class="mb-5 heading-pricing ftco-animate">{{ $category->name }}</h3>
                            @foreach ($category->menus as $menu)
                                <div class="pricing-entry d-flex ftco-animate">
                                    <div class="img" style="background-image: url({{ asset('storage/' . $menu->image) }});"></div>
                                    <div class="desc pl-3">
                                        <div class="d-flex text align-items-center">
                                            <h3><span>{{ $menu->name }}</span></h3>
                                            <span class="price"></span>
                                        </div>
                                        <div class="d-block">
                                            <p>{!! $menu->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection