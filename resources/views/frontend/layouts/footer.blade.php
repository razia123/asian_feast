<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <a href="{{ route('about') }}">
                        <p>{!! Str::limit(@$about->description, 200) !!}</p>
                    </a>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=61578561987126"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                            style="background-image: url({{ asset('frontend/assets/images/image_1.jpg') }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                    about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                            style="background-image: url({{ asset('frontend/assets/images/image_2.jpg') }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                    about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Order</a></li>
                        <li><a href="#" class="py-2 d-block">Deliver</a></li>
                        <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">146, Perry rise
                                    Forest hill
                                    London
                                    SE23 2QP</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">07482803597</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@asianfeast.uk</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Asian Feast. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
