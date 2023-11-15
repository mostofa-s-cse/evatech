@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
@endphp
@extends('front-end.layouts.master')
@section('title','Single Projects')
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
    <!-- Project Start -->
    <div class="container-fluid project py-5">
        <div class="container">
            <h2 class="mb-5">{{$projects->title}}</h2>
            <div class="wow fadeIn" data-wow-delay="1s">
                <img src="{{ asset($projects->image) }}" class="img-fluid w-100 rounded" alt="" style="height: 30rem">
            </div>
                     <div class="col-md-12 col-lg-12 wow fadeIn" data-wow-delay="1s">
                              
                               <p>{!!$projects->description!!}</p>
                            </div>
                        </div>
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
