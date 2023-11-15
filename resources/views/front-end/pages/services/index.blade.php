@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
    $counter = \Illuminate\Support\Facades\DB::table('counters')->get();
    $provides = \Illuminate\Support\Facades\DB::table('provides')
    ->where('status',1)
    ->get();
@endphp
@extends('front-end.layouts.master')
@section('title','Services')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" @if($site_info) style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{asset($site_info->image)}}) center center no-repeat;"@endif>
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                                    <p class="mb-4">{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#home-services").addClass('active');
        });

    </script>
@endsection
