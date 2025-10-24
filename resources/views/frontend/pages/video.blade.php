@extends('frontend.master')
@section('title', 'Video')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item"
            style="background-image: url({{ asset('frontend/assets/images/services.jpg') }});background-size: cover; background-repeat: no-repeat;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Video</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>Video</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Our Videos</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($videos as $video)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch text-center">
                            <a href="#" class="block-20" data-toggle="modal" data-target="#videoModal"
                                data-video-src="{{ asset('storage/' . $video->video) }}"
                                data-video-title="{{ $video->title }}" data-video-description="{{ $video->description }}">
                                <div class="video-placeholder"
                                    style="height: 200px; position: relative; border-radius: 10px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $video->cover_photo) }}" alt="{{ $video->title }}"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                    <div class="d-flex align-items-center justify-content-center text-center"
                                        style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.3);">
                                        <span class="icon-play"
                                            style="font-size: 50px; color: #fff; transition: all 0.3s ease;"></span>
                                    </div>
                                    <div class="video-title"
                                        style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0,0,0,0.5); color: #fff; padding: 10px; text-align: center;">
                                        <h3 class="heading mt-2" style="color: #fff; font-size: 16px; margin-bottom: 0;">
                                            {{ $video->title }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="100%" controls id="modalVideo">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p id="modalVideoDescription"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#videoModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var videoSrc = button.data('video-src') // Extract info from data-* attributes
                var videoTitle = button.data('video-title')
                var videoDescription = button.data('video-description')

                var modal = $(this)
                modal.find('.modal-title').text(videoTitle)
                var video = modal.find('#modalVideo');
                video.find('source').attr('src', videoSrc)
                video[0].load();
                modal.find('#modalVideoDescription').text(videoDescription)
            });

            $('#videoModal').on('hidden.bs.modal', function() {
                $('#modalVideo')[0].pause();
            });
        });
    </script>
@endsection
