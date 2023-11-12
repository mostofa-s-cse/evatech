@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_infos')->first();
@endphp
@php
    $about = \Illuminate\Support\Facades\DB::table('abouts')->first();
@endphp
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <a href="index.html">
                    <h1 class="text-white fw-bold d-block">@if($site_info) {{$site_info->first_name}}<span class="text-secondary">{{$site_info->last_name}}</span>  @endif  </h1>
                </a>

                @php
                    $description = ($about) ? substr($about->description, 0, 150) : null;
                @endphp
                <p class="mt-4 text-light">{!! $description !!}... <a href="{{ route('abouts') }}">More details</a></p>
                <div class="d-flex hightech-link">
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#" class="h3 text-secondary">Company</a>
                <div class="mt-4 d-flex flex-column short-link">
                    <a href="{{ route('abouts') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                    <a href="{{ route('contact') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                    <a href="{{ route('services') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                    <a href="{{ route('projects') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> @if($site_info) {{$site_info->address}} @endif</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> @if($site_info) {{$site_info->phone}} @endif</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> @if($site_info) {{$site_info->email}} @endif</a>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Your Site Name</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
            </div>
        </div>
    </div>
</div>
