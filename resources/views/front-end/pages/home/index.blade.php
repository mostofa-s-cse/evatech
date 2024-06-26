@php
    $slider = \Illuminate\Support\Facades\DB::table('sliders')
    ->where('status',1)
    ->get();
    $counter = \Illuminate\Support\Facades\DB::table('counters')->get();
    $about = \Illuminate\Support\Facades\DB::table('abouts')->first();
    $provides = \Illuminate\Support\Facades\DB::table('provides')
    ->where('status',1)
    ->get();
    $projects = \Illuminate\Support\Facades\DB::table('projects')
    ->where('status',1)
    ->get();
    $reviews = \Illuminate\Support\Facades\DB::table('reviews')
    ->where('status',1)
    ->get();
    $customers = \Illuminate\Support\Facades\DB::table('customers')
    ->where('status',1)
    ->get();
    $hires = \Illuminate\Support\Facades\DB::table('hires')
    ->where('status',1)
    ->get();
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
@endphp
@extends('front-end.layouts.master')
@section('title','Home')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($slider as $key => $item)
                <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="Slide {{ $key + 1 }}">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">{{ $item->top_title }}</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">{{ $item->title }}</h1>
                            <a href="{{ route('abouts') }}" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 mb-2 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                            <a href="{{ route('contact') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Fact Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container">
        <div class="row">
            @foreach($counter as $item)
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">{{$item->number}}</h1>
                    <h5 class="text-white mt-1">{{$item->title}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- Services Start -->
<div class="container-fluid services py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">@if($site_info) {{$site_info->provide_top_title}} @endif</h5>
            <h1>@if($site_info) {{$site_info->provide_title}} @endif</h1>
        </div>
        <div class="row g-5 services-inner">
            @foreach($provides as $key => $item)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ $key === 0 ? '.3s' : '.' . (.5 + $key/10) . 's' }}">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <img class="mb-4 img-fluid service-image" src="{{ asset($item->image) }}" alt="">
                                <h4 class="mb-3">{{ $item->title }}</h4>
                                @php
                                    $description_provides = substr($item->description, 0, 100);
                                @endphp
                                <p class="mb-4">{{ $description_provides}}</p>
                                {{-- <a href="{{ route('services') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100">
                    <img src="@if($about) {{ asset($about->image) }} @endif" class="img-fluid rounded" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">@if($site_info) {{$site_info->about_top_title}} @endif</h5>
                <h1 class="mb-4">@if($about) {!! $about->title !!} @endif</h1>
                @php
                    $description = ($about) ? substr($about->description, 0, 350) : null;
                @endphp
               <p>@if($about) {!! $description !!}@endif ...</p>
                <a href="{{ route('abouts') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid services py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
{{--            <h5 class="text-primary">Our Services</h5>--}}
            <h1>@if($site_info) {{$site_info->hire}} @endif</h1>
        </div>
        <div class="row g-5 services-inner">
            @foreach($hires as $key => $item)
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="{{ $key === 0 ? '.3s' : '.' . (.5 + $key/10) . 's' }}">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <img class="mb-4 img-fluid service-image" src="{{ asset($item->image) }}" alt="">
                                <h4 class="mb-3">{{ $item->name }}</h4>
{{--                                <p class="mb-4">{{$item->description}}</p>--}}
{{--                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
{{--<div class="container-fluid testimonial py-5 mb-5">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">--}}
{{--            <h5 class="text-primary">Our Projects</h5>--}}
{{--            <h1>Our Projects</h1>--}}
{{--        </div>--}}
{{--        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">--}}
{{--            <div class="testimonial-item border m-2 rounded">--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="w-100">--}}
{{--                        <img class="img-fluid" src="{{asset('frontend/img/project-1.jpg')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pt-3 p-4">--}}
{{--                    <h4 class="text-secondary text-center">Client Name</h4>--}}
{{--                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border m-2 rounded">--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="w-100">--}}
{{--                        <img class="img-fluid" src="{{asset('frontend/img/project-1.jpg')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pt-3 p-4">--}}
{{--                    <h4 class="text-secondary text-center">Client Name</h4>--}}
{{--                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border m-2 rounded">--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="w-100">--}}
{{--                        <img class="img-fluid" src="{{asset('frontend/img/project-1.jpg')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pt-3 p-4">--}}
{{--                    <h4 class="text-secondary text-center">Client Name</h4>--}}
{{--                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border m-2 rounded">--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="w-100">--}}
{{--                        <img class="img-fluid" src="{{asset('frontend/img/project-1.jpg')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pt-3 p-4">--}}
{{--                    <h4 class="text-secondary text-center">Client Name</h4>--}}
{{--                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">@if($site_info) {{$site_info->project_top_title}} @endif</h5>
            <h1>@if($site_info) {{$site_info->provide_title}} @endif</h1>
        </div>
        <div class="row g-5">
            @foreach($projects as $key => $item)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ $key === 0 ? '.3s' : '.' . (.5 + $key/10) . 's' }}">
                
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset($item->image) }}" class="img-fluid w-100 rounded" alt="">
                        
                        <div class="project-content">
                            <a href="{{route('single_project',$item->id)}}" class="text-center">
                                <h4 class="text-secondary">{{$item->title}}</h4>
                                <p class="m-0 text-white btn btn-primary">More details</p>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="{{route('single_project',$item->id)}}"> <h5 class="text-center mt-2 text-secondary">{{$item->title}}</h5></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
{{--<div class="container-fluid blog py-5 mb-5">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">--}}
{{--            <h5 class="text-primary">Our Blog</h5>--}}
{{--            <h1>Latest Blog & News</h1>--}}
{{--        </div>--}}
{{--        <div class="row g-5 justify-content-center">--}}
{{--            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">--}}
{{--                <div class="blog-item position-relative bg-light rounded">--}}
{{--                    <img src="{{asset('frontend/img/blog-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">--}}
{{--                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span>--}}
{{--                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">--}}
{{--                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">--}}
{{--                            <a href="" class="btn text-white">Read More</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">--}}
{{--                            <div class="blog-icon-1">--}}
{{--                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>--}}
{{--                            </div>--}}
{{--                            <div class="blog-icon-2">--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">--}}
{{--                        <img src="{{asset('frontend/img/admin.jpg')}}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">--}}
{{--                        <h5 class="">By Daniel Martin</h5>--}}
{{--                        <span class="text-secondary">24 March 2023</span>--}}
{{--                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">--}}
{{--                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>--}}
{{--                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">--}}
{{--                <div class="blog-item position-relative bg-light rounded">--}}
{{--                    <img src="{{asset('frontend/img/blog-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="">--}}
{{--                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>--}}
{{--                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">--}}
{{--                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">--}}
{{--                            <a href="" class="btn text-white ">Read More</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">--}}
{{--                            <div class="blog-icon-1">--}}
{{--                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>--}}
{{--                            </div>--}}
{{--                            <div class="blog-icon-2">--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">--}}
{{--                        <img src="{{asset('frontend/img/admin.jpg')}}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">--}}
{{--                        <h5 class="">By Daniel Martin</h5>--}}
{{--                        <span class="text-secondary">23 April 2023</span>--}}
{{--                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">--}}
{{--                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>--}}
{{--                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">--}}
{{--                <div class="blog-item position-relative bg-light rounded">--}}
{{--                    <img src="{{asset('frontend/img/blog-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="">--}}
{{--                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Mobile App</span>--}}
{{--                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">--}}
{{--                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">--}}
{{--                            <a href="" class="btn text-white ">Read More</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">--}}
{{--                            <div class="blog-icon-1">--}}
{{--                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>--}}
{{--                            </div>--}}
{{--                            <div class="blog-icon-2">--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>--}}
{{--                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">--}}
{{--                        <img src="{{asset('frontend/img/admin.jpg')}}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">--}}
{{--                        <h5 class="">By Daniel Martin</h5>--}}
{{--                        <span class="text-secondary">30 jan 2023</span>--}}
{{--                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">--}}
{{--                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>--}}
{{--                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Blog End -->


<!-- Team Start -->
{{--<div class="container-fluid py-5 mb-5 team">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">--}}
{{--            <h5 class="text-primary">Our Team</h5>--}}
{{--            <h1>Meet our expert Team</h1>--}}
{{--        </div>--}}
{{--        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">--}}
{{--            <div class="rounded team-item">--}}
{{--                <div class="team-content">--}}
{{--                    <div class="team-img-icon">--}}
{{--                        <div class="team-img rounded-circle">--}}
{{--                            <img src="{{asset('frontend/img/team-1.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-name text-center py-3">--}}
{{--                            <h4 class="">Full Name</h4>--}}
{{--                            <p class="m-0">Designation</p>--}}
{{--                        </div>--}}
{{--                        <div class="team-icon d-flex justify-content-center pb-4">--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="rounded team-item">--}}
{{--                <div class="team-content">--}}
{{--                    <div class="team-img-icon">--}}
{{--                        <div class="team-img rounded-circle">--}}
{{--                            <img src="{{asset('frontend/img/team-2.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-name text-center py-3">--}}
{{--                            <h4 class="">Full Name</h4>--}}
{{--                            <p class="m-0">Designation</p>--}}
{{--                        </div>--}}
{{--                        <div class="team-icon d-flex justify-content-center pb-4">--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="rounded team-item">--}}
{{--                <div class="team-content">--}}
{{--                    <div class="team-img-icon">--}}
{{--                        <div class="team-img rounded-circle">--}}
{{--                            <img src="{{asset('frontend/img/team-3.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-name text-center py-3">--}}
{{--                            <h4 class="">Full Name</h4>--}}
{{--                            <p class="m-0">Designation</p>--}}
{{--                        </div>--}}
{{--                        <div class="team-icon d-flex justify-content-center pb-4">--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="rounded team-item">--}}
{{--                <div class="team-content">--}}
{{--                    <div class="team-img-icon">--}}
{{--                        <div class="team-img rounded-circle">--}}
{{--                            <img src="{{asset('frontend/img/team-4.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-name text-center py-3">--}}
{{--                            <h4 class="">Full Name</h4>--}}
{{--                            <p class="m-0">Designation</p>--}}
{{--                        </div>--}}
{{--                        <div class="team-icon d-flex justify-content-center pb-4">--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Team End -->


<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">@if($site_info) {{$site_info->customer_top_title}} @endif</h5>
            <h1>@if($site_info) {{$site_info->customer_title}} @endif</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach($customers as $item)
                <div class="testimonial-item d-flex align-items-center m-1">
                    <div>
                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="" style="height: 10rem">
                    </div>
                    <!-- Additional content can be added here -->
                </div>
            @endforeach
        </div>
        <div class="owl-carousel testimonial-carousel mt-4 wow fadeIn" data-wow-delay=".5s">
            @foreach($reviews as $item)
                <div class="testimonial-item2 m-2 text-center">
                    <div class="">
                        <img src="{{ asset($item->image) }}" alt="" style="width: 50px; height: 50px" class="mx-auto mb-2">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">{{$item->name}}</h4>
                        
                        <p class="m-0 pb-3">{{$item->designation}}</p>
                    </div>
                    <div class="px-2">
                        <h5 class="">{{$item->title}}</h5>
                        <p class="mb-0">{{$item->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


<!-- Testimonial Start -->





<!-- Testimonial End -->


<!-- Contact Start -->
{{--<div class="container-fluid py-5 mb-5">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">--}}
{{--            <h5 class="text-primary">Get In Touch</h5>--}}
{{--            <h1 class="mb-3">Contact for any query</h1>--}}
{{--            <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>--}}
{{--        </div>--}}
{{--        <div class="contact-detail position-relative p-5">--}}
{{--            <div class="row g-5 mb-5 justify-content-center">--}}
{{--                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">--}}
{{--                    <div class="d-flex bg-light p-3 rounded">--}}
{{--                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">--}}
{{--                            <i class="fas fa-map-marker-alt text-white"></i>--}}
{{--                        </div>--}}
{{--                        <div class="ms-3">--}}
{{--                            <h4 class="text-primary">Address</h4>--}}
{{--                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank Str, NY</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">--}}
{{--                    <div class="d-flex bg-light p-3 rounded">--}}
{{--                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">--}}
{{--                            <i class="fa fa-phone text-white"></i>--}}
{{--                        </div>--}}
{{--                        <div class="ms-3">--}}
{{--                            <h4 class="text-primary">Call Us</h4>--}}
{{--                            <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">--}}
{{--                    <div class="d-flex bg-light p-3 rounded">--}}
{{--                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">--}}
{{--                            <i class="fa fa-envelope text-white"></i>--}}
{{--                        </div>--}}
{{--                        <div class="ms-3">--}}
{{--                            <h4 class="text-primary">Email Us</h4>--}}
{{--                            <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row g-5">--}}
{{--                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">--}}
{{--                    <div class="p-5 h-100 rounded contact-map">--}}
{{--                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">--}}
{{--                    <div class="p-5 rounded contact-form">--}}
{{--                        <div class="mb-4">--}}
{{--                            <input type="text" class="form-control border-0 py-3" placeholder="Your Name">--}}
{{--                        </div>--}}
{{--                        <div class="mb-4">--}}
{{--                            <input type="email" class="form-control border-0 py-3" placeholder="Your Email">--}}
{{--                        </div>--}}
{{--                        <div class="mb-4">--}}
{{--                            <input type="text" class="form-control border-0 py-3" placeholder="Project">--}}
{{--                        </div>--}}
{{--                        <div class="mb-4">--}}
{{--                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="text-start">--}}
{{--                            <button class="btn bg-primary text-white py-3 px-5" type="button">Send Message</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#home-home").addClass('active');
        });

    </script>
@endsection
