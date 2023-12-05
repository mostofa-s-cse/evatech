@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
    $counter = \Illuminate\Support\Facades\DB::table('counters')->get();
@endphp
@extends('front-end.layouts.master')
@section('title','Contact Us')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" @if($site_info) style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{asset($site_info->image)}}) center center no-repeat;"@endif>
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid py-5" style="background-color: #800000d5">
        <div class="container">
            <div class="row">
                @foreach($counter as $item)
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value" style="color: #0dcaf0">{{$item->number}}</h1>
                            <h5 class="text-white mt-1">{{$item->title}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a class="h5" href="tel:+0123456789" target="_blank">@if($site_info) {{$site_info->phone}} @endif</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a class="h5" href="mailto:info@example.com" target="_blank">@if($site_info) {{$site_info->email}} @endif</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7147025238046!2d90.39493017619598!3d23.864262578592946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5a25b501af1%3A0x9182249dac6b5f87!2sUttara%203%20Number%20Sector!5e0!3m2!1sen!2sbd!4v1700040304700!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <form action="{{route('contact_store')}}" method="post">
                            @csrf
                            @method('POST')
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input type="text" name="name" class="form-control border-0 py-3" placeholder="Your Name" required>
                            </div>
                            <div class="mb-4">
                                <input type="text"name="phone" class="form-control border-0 py-3" placeholder="Your Phone Number" required>
                            </div>
                            <div class="mb-4">
                                <input type="email"name="email" class="form-control border-0 py-3" placeholder="Your Email" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="subject"  class="form-control border-0 py-3" placeholder="Subject" required>
                            </div>
                            <div class="mb-4">
                                <textarea name="message" class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#home-contact").addClass('active');
        });

    </script>
@endsection
