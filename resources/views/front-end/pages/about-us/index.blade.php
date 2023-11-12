@php
    $about = \Illuminate\Support\Facades\DB::table('abouts')->first();
@endphp
@extends('front-end.layouts.master')
@section('title','About Us')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-1">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100">
                        <img src="@if($about) {{ asset($about->image) }} @endif" class="img-fluid rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">@if($about)
                            {!! $about->title !!}
                        @endif</h1>
                    <p>@if($about)
                            {!! $about->description !!}
                        @endif</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="container-fluid py-2">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <h2>Our Mission</h2>
                    <p>@if($about)
                            {!! $about->mission !!}
                        @endif</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h2>Our Vision</h2>
                    <p>@if($about)
                            {!! $about->vision !!}
                        @endif</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <h2>Experience</h2>
                    <p>@if($about)
                            {!! $about->mission !!}
                        @endif</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <div class="h-100">
                        <img src="@if($about) {{ asset($about->image) }} @endif" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-6">
                    <div class="h-100 mb-3">
                        <img src="@if($about) {{ asset($about->image) }} @endif" class="img-fluid rounded" alt="">
                    </div>
                </div>
                <div class="col-sm-6 my-auto"><p class="h1 text-center"
                                                 style="color: rgb(246, 1, 134); font-weight: 700;">Why
                        Choose Us?</p>
                    <p class="text-center">We know when you face any problem you want to solve it as soon as possible.
                        Therefor,
                        will try our best to support you when you want.</p><br>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">Best Quality Designs
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"
                                         style="">
                                        <div class="accordion-body">Quality is our agreement. Better quality bring big
                                            change of
                                            a company. We are always updated to latest technology.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                aria-controls="flush-collapseTwo">24x7 Live Support
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample"
                                         style="">
                                        <div class="accordion-body">Let me know what problem are you facing immediately.
                                            We will
                                            response you as soon as possible. You can contact us 7 days in a week, 24
                                            hours in a
                                            day that means all time. Feel free and comfortable to contact us.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                aria-controls="flush-collapseThree">Result Oriented Projects
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample"
                                         style="">
                                        <div class="accordion-body">We are promised to deliver you a outcome as your
                                            demand. You
                                            will pay us according to our result after completing the project
                                            successfully.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                                aria-controls="flush-collapseFour">Experienced Professionals
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample"
                                         style="">
                                        <div class="accordion-body">You haven’t to worry about our experience and
                                            quality. You
                                            can fully rely on our service for a better future of your company or
                                            business.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                                aria-controls="flush-collapseFive">Support after service
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample"
                                         style="">
                                        <div class="accordion-body">You haven’t to worry about our experience and
                                            quality. You
                                            can fully rely on our service for a better future of your company or
                                            business.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Start -->
    {{--    <div class="container-fluid pb-5 mb-5 team">--}}
    {{--        <div class="container pb-5">--}}
    {{--            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">--}}
    {{--                <h5 class="text-primary">Our Team</h5>--}}
    {{--                <h1>Meet our expert Team</h1>--}}
    {{--            </div>--}}
    {{--            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">--}}
    {{--                <div class="rounded team-item">--}}
    {{--                    <div class="team-content">--}}
    {{--                        <div class="team-img-icon">--}}
    {{--                            <div class="team-img rounded-circle">--}}
    {{--                                <img src="img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="team-name text-center py-3">--}}
    {{--                                <h4 class="">Full Name</h4>--}}
    {{--                                <p class="m-0">Designation</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="team-icon d-flex justify-content-center pb-4">--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="rounded team-item">--}}
    {{--                    <div class="team-content">--}}
    {{--                        <div class="team-img-icon">--}}
    {{--                            <div class="team-img rounded-circle">--}}
    {{--                                <img src="img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="team-name text-center py-3">--}}
    {{--                                <h4 class="">Full Name</h4>--}}
    {{--                                <p class="m-0">Designation</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="team-icon d-flex justify-content-center pb-4">--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="rounded team-item">--}}
    {{--                    <div class="team-content">--}}
    {{--                        <div class="team-img-icon">--}}
    {{--                            <div class="team-img rounded-circle">--}}
    {{--                                <img src="img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="team-name text-center py-3">--}}
    {{--                                <h4 class="">Full Name</h4>--}}
    {{--                                <p class="m-0">Designation</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="team-icon d-flex justify-content-center pb-4">--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="rounded team-item">--}}
    {{--                    <div class="team-content">--}}
    {{--                        <div class="team-img-icon">--}}
    {{--                            <div class="team-img rounded-circle">--}}
    {{--                                <img src="img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="team-name text-center py-3">--}}
    {{--                                <h4 class="">Full Name</h4>--}}
    {{--                                <p class="m-0">Designation</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="team-icon d-flex justify-content-center pb-4">--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
    {{--                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Team End -->

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#home-about").addClass('active');
        });

    </script>
@endsection
