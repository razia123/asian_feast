@extends('frontend.master')
@section('title', 'Home')

@section('content')
    <section class="home-slider owl-carousel full-height-slider">
        @foreach ($sliders as $slider)
                                    <div class="slider-item" style="background-image: url({{ asset('storage/' . $slider->image) }}); background-size: cover; background-position: center; background-repeat: no-repeat; height: 700px;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-8 col-sm-12 text-center ftco-animate">
                            
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('storage/' . @$about->image) }}); height: 600px; width: 100%; background-size: cover; background-position: center;"></div>
        <div class="one-half ftco-animate d-flex align-items-center">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">{{ @$about->title }}</h2>
                </div>
                <div>
                    <p>{!! Str::limit(@$about->description, 200) !!}</p>
                    <a href="{{ route('about') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Easy to Order</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Fastest Delivery</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="#000000">
                                <path d="M16,1.051V0H8v1.051c-1.212,0.212-2.315,0.646-3.266,1.26L4,3H3v1h1.42c-0.48,0.836-0.813,1.754-0.968,2.717L0,16.969V18h24v-1.031L20.548,7.977c-0.155-0.963-0.488-1.881-0.968-2.717H21V3h-1l-0.734-0.689C18.315,1.697,17.212,1.263,16,1.051z M9,1h6v0.949c-1.141-0.199-2.334-0.199-3.475,0H9V1z M19.07,7.01C19.442,7.84,19.696,8.743,19.81,9.66L18,17H6l-1.81-7.34c0.114-0.917,0.368-1.82,0.74-2.65H19.07z"/>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Quality Food</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Discover</span>
                        <h2 class="mb-4">Our Menu</h2>
                        {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean.</p> --}}
                        <p><a href="{{ route('menu') }}" class="btn btn-primary btn-outline-primary px-4 py-3">View Full
                                Menu</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($menus as $menu)
                            <div class="col-md-6">
                                <div class="menu-entry">
                                    <a href="#" class="img"
                                        style="background-image: url({{ asset('storage/' . $menu->image) }});"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('frontend/assets/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Number of Orders</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Happy Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Set Menu</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p> --}}
                </div>
            </div>
            <div class="row">
                @foreach ($set_menus as $set_menu)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="{{ route('menu_detail') }}" class="img"
                                style="background-image: url({{ asset('storage/' . $set_menu->image) }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="#">{{ $set_menu->name }}</a></h3>
                                <p>{{ $set_menu->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-menu">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Products</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p> --}}
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
                                role="tablist" aria-orientation="vertical">
                                @foreach ($categories as $key => $category)
                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-{{ $category->id }}-tab" data-toggle="pill" href="#v-pills-{{ $category->id }}"
                                        role="tab" aria-controls="v-pills-{{ $category->id }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                @foreach ($categories as $key => $category)
                                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="v-pills-{{ $category->id }}" role="tabpanel"
                                        aria-labelledby="v-pills-{{ $category->id }}-tab">
                                        <div class="row">
                                            @foreach ($category->menus as $menu)
                                                <div class="col-md-4 text-center">
                                                    <div class="menu-wrap">
                                                        <a href="#" class="menu-img img mb-4"
                                                            style="background-image: url({{ asset('storage/' . $menu->image) }});"></a>
                                                        <div class="text">
                                                            <h3><a href="#">{{ $menu->name }}</a></h3>
                                                            <p>{!! $menu->description !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section img" id="ftco-testimony"
        style="background-image: url({{ asset('frontend/assets/images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Customers Says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('frontend/assets/images/person_1.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                    Designer</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                                decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('frontend/assets/images/person_2.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                    Designer</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name. &rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('frontend/assets/images/person_3.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                    Designer</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('frontend/assets/images/person_2.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                    Designer</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name. &rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('frontend/assets/images/person_3.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                    Designer</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend/assets/images/gallery-1.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend/assets/images/gallery-2.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend/assets/images/gallery-3.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend/assets/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Gallery</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p> --}}
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                @foreach ($galleries as $gallery)
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center"
                            style="background-image: url({{ asset('storage/' . $gallery->image) }});">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Videos</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p> --}}
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20"
                                style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
                            </a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a href="#">{{ $blog->created_at->format('M d, Y') }}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading mt-2"><a href="#">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- <section class="ftco-appointment">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Book a Table</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
