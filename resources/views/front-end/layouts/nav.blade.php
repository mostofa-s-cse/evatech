@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
@endphp
<div class="container-fluid bg-white">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0 ">
            <a href="{{ route('frontend.index') }}" class="navbar-brand">
                <h1 class="text-black fw-bold d-block">@if($site_info) {{$site_info->first_name}}<span style="color: #015FC9">{{$site_info->last_name}}</span>  @endif  </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="{{ route('frontend.index') }}" class="nav-item nav-link" id="home-home" style="color: #000">Home</a>
                    <a href="{{ route('abouts') }}" class="nav-item nav-link" id="home-about" style="color: #000">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link" id="home-services" style="color: #000">Services</a>
                    <a href="{{ route('projects') }}" class="nav-item nav-link" id="home-projects" style="color: #000">Projects</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link" id="home-contact" style="color: #000">Contact</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt fa-2x" style="color: #015FC9"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots" style="color: #015FC9"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-black-50">Have any questions?</span>
                    <span style="color: #015FC9">Call: @if($site_info) {{$site_info->phone}} @endif</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    @if (Route::has('login'))

                    @auth
                    <a class="btn login-btn" href="{{ route('dashboard') }}" target="_blank" style="color: white">Dashboard</a>
                    @else
                        <a class="btn login-btn" href="{{ route('login') }}" target="_blank" style="color: white">Log in</a>
                    @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>
