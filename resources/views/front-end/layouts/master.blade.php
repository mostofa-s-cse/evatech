<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') || BNM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

{{-- All Css  --}}
    @include('front-end.layouts.css')
</head>
<body>
<!-- Spinner Start -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
@include('front-end.layouts.nav')
<!-- Navbar End -->
@yield('content')



<!-- Footer Start -->
@include('front-end.layouts.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-square rounded-circle back-to-top" style="background-color: #e82629; border-color: #e82629"><i class="fa fa-arrow-up text-white"></i></a>


<!-- JavaScript Libraries -->
@include('front-end.layouts.js')
@yield('js')
</body>
</html>
