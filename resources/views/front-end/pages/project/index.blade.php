@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
    $counter = \Illuminate\Support\Facades\DB::table('counters')->get();
    $projects = \Illuminate\Support\Facades\DB::table('projects')
    ->where('status',1)
    ->get();
@endphp
@extends('front-end.layouts.master')
@section('title','Projects')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" @if($site_info) style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{asset($site_info->image)}}) center center no-repeat;"@endif>
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Projects</li>
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


    <!-- Project Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">@if($site_info) {{$site_info->project_top_title}} @endif</h5>
                <h1>@if($site_info) {{$site_info->project_title}} @endif</h1>
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
                                       
                                        <p class="btn btn-primary">more details</p>
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
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#home-projects").addClass('active');
        });

    </script>
@endsection
