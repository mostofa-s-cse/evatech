<!-- Navbar Start -->
<div class="container-fluid fixed-top" style="background-color: #fff">
    <div class="container">
      <nav class="navbar navbar-light navbar-expand-lg py-0">
        <a href="{{ route('frontend.index') }}" class="navbar-brand">
          <img
            src="{{asset('frontend/img/BNMLogo.png')}}"
            class="img-fluid"
            alt="First slide"
            style="height: auto; width: 73px"
          />
        </a>
        <button
          type="button"
          class="navbar-toggler me-0"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse bg-transparent"
          id="navbarCollapse"
        >
          <div class="navbar-nav ms-auto mx-xl-auto p-0">
            <a
              href="{{ route('frontend.index') }}"
              class="nav-item nav-link active text-secondary"
              >Home</a
            >
            <a href="{{ route('abouts') }}" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Party</a
              >
              <div class="dropdown-menu rounded">
                <a href="{{ route('party') }}" class="dropdown-item">Party</a>
              </div>
            </div>
            <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
            <a href="{{ route('donate') }}" class="nav-item nav-link">Donate</a>
            <a href="{{ route('news') }}" class="nav-item nav-link">News</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            @if (Route::has('login'))
        @auth
        <!-- Dashboard link visible on xs, sm, md and hidden on lg, xl -->
        <a href="contact.html" class="nav-item nav-link d-block d-lg-none">Dashboard</a>
        @else
        <!-- Login link visible on xs, sm, md and hidden on lg, xl -->
        <a href="contact.html" class="nav-item nav-link d-block d-lg-none">Login</a>
        @endauth
        @endif
          </div>
        </div>
        <div class="d-none d-xl-flex flex-shrink-0">
          <div
            id="phone-tada"
            class="d-flex align-items-center justify-content-center me-4"
          >
            <a href="" class="position-relative animated tada infinite">
              <i class="fa fa-phone-alt fa-2x" style="color: #e82629"></i>
              <div class="position-absolute" style="top: -7px; left: 20px">
                <span
                  ><i class="fa fa-comment-dots" style="color: #39b44b"></i
                ></span>
              </div>
            </a>
          </div>
          <div class="d-flex flex-column pe-4 border-end">
            <span style="color: black">Have any questions?</span>
            <span style="color: black">Call: + 0123 456 7890</span>
          </div>
          {{-- <div class="d-flex align-items-center justify-content-center ms-4">
            <a
              href="project.html"
              class="btn btn-primary"
              style="background-color: #e82629; border-color: #e82629"
              >Login</a
            >
          </div> --}}
          <div class="d-flex align-items-center justify-content-center ms-4 ">
            @if (Route::has('login'))

            @auth
            <a class="btn btn-success" href="{{ route('dashboard') }}" target="_blank" style="background-color: #e82629; border-color: #e82629">Dashboard</a>
            @else
                <a class="btn btn-success" href="{{ route('login') }}" target="_blank" style="background-color: #e82629; border-color: #e82629">Log in</a>
            @endauth
            @endif
        </div>
        </div>
      </nav>
    </div>
  </div>
<!-- Navbar End -->
