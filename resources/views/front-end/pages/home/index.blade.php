@extends('front-end.layouts.master')
@section('title','Home')
@section('content')
 <!-- Carousel Start -->
 <div class="container-fluid px-0 custom-carousel" style="margin-top: 32px">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li
          data-bs-target="#carouselId"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="First slide"
        ></li>
        <li
          data-bs-target="#carouselId"
          data-bs-slide-to="1"
          aria-label="Second slide"
        ></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="{{asset('frontend/img/carousel-1.jpg')}}" class="img-fluid" alt="First slide" />
          <div class="carousel-caption">
            <div class="container carousel-content">
              <!-- <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6> -->
              <h1 class="text-white display-4 mb-4 animated fadeInRight">
                Bangladesh Nationalist Movement - BNM
              </h1>
              <p class="mb-4 text-white fs-5 animated fadeInDown">
                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                interdum. Pellentesque aliquam dolor eget urna ultricies
                tincidunt.
              </p>
              <div class="d-flex gap-3 justify-content-center">
                <a href=""
                  ><button
                    type="button"
                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft carousel-btn"
                  >
                    Read More
                  </button></a
                >
                <a href=""
                  ><button
                    type="button"
                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight carousel-btn"
                  >
                    Contact Us
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="{{asset('frontend/img/carousel-2.jpg')}}"
            class="img-fluid"
            alt="Second slide"
          />
          <div class="carousel-caption">
            <div class="container carousel-content">
              <!-- <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6> -->
              <h1 class="text-white display-4 mb-4 animated fadeInLeft">
                Bangladesh Nationalist Movement - BNM
              </h1>
              <p class="mb-4 text-white fs-5 animated fadeInDown">
                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                interdum. Pellentesque aliquam dolor eget urna ultricies
                tincidunt.
              </p>
              <div class="d-flex gap-3 justify-content-center">
                <a href=""
                  ><button
                    type="button"
                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft carousel-btn"
                  >
                    Read More
                  </button></a
                >
                <a href=""
                  ><button
                    type="button"
                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight carousel-btn"
                  >
                    Contact Us
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-fluid py-5 my-5">
    <div class="container">
      <div class="row g-5">
        <div
          class="col-lg-5 col-md-6 col-sm-12 wow fadeIn"
          data-wow-delay=".3s"
        >
          <div class="h-100 position-relative">
            <img
              src="{{asset('frontend/img/about-2.jpg')}}"
              class="img-fluid w-75 rounded"
              alt=""
              style="margin-bottom: 25%"
            />
            <div class="position-absolute w-75" style="top: 25%; left: 25%">
              <img
                src="{{asset('frontend/img/about-1.jpeg')}}"
                class="img-fluid w-100 rounded"
                alt=""
              />
            </div>
          </div>
        </div>
        <div
          class="col-lg-7 col-md-6 col-sm-12 wow fadeIn"
          data-wow-delay=".5s"
        >
          <h5 style="color: #39b44b">About Us</h5>
          <h1 class="mb-4">Bangladesh Nationalist Movement - BNM</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            efficitur quis purus ut interdum. Pellentesque aliquam dolor eget
            urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus,
            ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida
            eros. Proin scelerisque quam nec elementum viverra. Suspendisse
            viverra hendrerit diam in tempus. Etiam gravida justo nec erat
            vestibulum, et malesuada augue laoreet.
          </p>
          <p class="mb-4">
            Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam
            volutpat libero sit amet leo cursus, ac viverra eros tristique.
            Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam
            nec elementum viverra. Suspendisse viverra hendrerit diam in
            tempus.
          </p>
          <a href="" class="btn btn-style rounded-pill px-5 py-3"
            >More Details</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Fact Start -->
  <div
    class="container-fluid bg-secondary py-5"
    id="stats-section"
    style="
      background-image: url('{{asset('frontend/img/counter-bg.jpg')}}');
      background-size: cover;
      background-attachment: fixed;
    "
  >
    <div class="container">
      <div
        class="text-center mx-auto pb-5 wow fadeIn"
        data-wow-delay=".3s"
        style="max-width: 600px"
      >
        <h1 style="color: #fff !important">Download Forms</h1>
      </div>
      <div class="row justify-content-center">
        <div
          class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn"
          data-wow-delay=".1s"
        >
          <div
            class="counter d-flex flex-column align-items-center text-center"
          >
            <i
              class="fa fa-file-pdf counter-icon mb-3"
              style="font-size: 2rem; color: #fff"
            ></i>
            <h5 class="countingr text-white mb-3">Nomination letter</h5>
            <a
              href="{{ asset('/images/forms/NominationApplicationForm.pdf') }}"
              download
              class="multi_button btn btn-style"
              >Download</a
            >
          </div>
        </div>
        <div
          class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn"
          data-wow-delay=".2s"
        >
          <div
            class="counter d-flex flex-column align-items-center text-center"
          >
            <i
              class="fa fa-file-pdf counter-icon mb-3"
              style="font-size: 2rem; color: #fff"
            ></i>
            <h5 class="countingr text-white mb-3">Affidavit</h5>
            <a
              href="{{ asset('/images/forms/HolofNama.pdf') }}"
              download
              class="multi_button btn btn-style"
              >Download</a
            >
          </div>
        </div>
        <div
          class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn"
          data-wow-delay=".3s"
        >
          <div
            class="counter d-flex flex-column align-items-center text-center"
          >
            <i
              class="fa fa-file-pdf counter-icon mb-3"
              style="font-size: 2rem; color: #fff"
            ></i>
            <h5 class="countingr text-white mb-3">
              Acknowledgment of receipt
            </h5>
            <a
              href="{{ asset('/images/forms/AcknowledgmentForm.pdf') }}"
              download
              class="multi_button btn btn-style"
              >Download</a
            >
          </div>
        </div>
        <div
          class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn"
          data-wow-delay=".4s"
        >
          <div
            class="counter d-flex flex-column align-items-center text-center"
          >
            <i
              class="fa fa-file-pdf counter-icon mb-3"
              style="font-size: 2rem; color: #fff"
            ></i>
            <h5 class="countingr text-white mb-3">Initial member form</h5>
            <a
              href="{{ asset('/images/forms/InitialMemberForm.pdf') }}"
              download
              class="multi_button btn btn-style"
              >Download</a
            >
          </div>
        </div>
        <div
          class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn"
          data-wow-delay=".5s"
        >
          <div
            class="counter d-flex flex-column align-items-center text-center"
          >
            <i
              class="fa fa-file-pdf counter-icon mb-3"
              style="font-size: 2rem; color: #fff"
            ></i>
            <h5 class="countingr text-white mb-3">Constitution</h5>
            <a
              href="{{ asset('/images/forms/NominationApplicationForm.pdf') }}"
              download
              class="multi_button btn btn-style"
              >Download</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fact End -->

  <!-- Our Programs Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div
        class="text-center mx-auto pb-5 wow fadeIn"
        data-wow-delay=".3s"
        style="max-width: 600px"
      >
        <h5 class="text-primary">Our Programs</h5>
        <h1>Programs & Press Releases</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="blog-card">
            <div class="meta">
              <div
                class="photo"
                style="
                  background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
                "
              ></div>
              <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
              </ul>
            </div>
            <div class="description">
              <h1>Learning to Code</h1>
              <h2 class="date">Aug. 24, 2015</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                eum dolorum architecto obcaecati enim dicta praesentium, quam
                nobis! Neque ad aliquam facilis numquam. Veritatis, sit.
              </p>
              <p class="read-more">
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blog-card">
            <div class="meta">
              <div
                class="photo"
                style="
                  background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
                "
              ></div>
              <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
              </ul>
            </div>
            <div class="description">
              <h1>Learning to Code</h1>
              <h2 class="date">Aug. 24, 2015</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                eum dolorum architecto obcaecati enim dicta praesentium, quam
                nobis! Neque ad aliquam facilis numquam. Veritatis, sit.
              </p>
              <p class="read-more">
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blog-card">
            <div class="meta">
              <div
                class="photo"
                style="
                  background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
                "
              ></div>
              <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
              </ul>
            </div>
            <div class="description">
              <h1>Learning to Code</h1>
              <h2 class="date">Aug. 24, 2015</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                eum dolorum architecto obcaecati enim dicta praesentium, quam
                nobis! Neque ad aliquam facilis numquam. Veritatis, sit.
              </p>
              <p class="read-more">
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blog-card">
            <div class="meta">
              <div
                class="photo"
                style="
                  background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
                "
              ></div>
              <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
              </ul>
            </div>
            <div class="description">
              <h1>Learning to Code</h1>
              <h2 class="date">Aug. 24, 2015</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                eum dolorum architecto obcaecati enim dicta praesentium, quam
                nobis! Neque ad aliquam facilis numquam. Veritatis, sit.
              </p>
              <p class="read-more">
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
        <a
          href=""
          class="btn btn-primary"
          style="background-color: #e82629; border-color: #e82629"
          >See More...</a
        >
      </div>
    </div>
  </div>

  <!-- Our Programs End -->

  <!-- Blog Start -->
  <div class="container-fluid bg-light blog py-5">
    <div class="container">
      <div
        class="text-center mx-auto pb-5 wow fadeIn"
        data-wow-delay=".3s"
        style="max-width: 600px"
      >
        <h5 class="text-primary">Our News</h5>
        <h1>Latest News</h1>
      </div>
      <div class="row g-5 justify-content-center">
        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-item position-relative bg-light rounded">
            <img
              src="{{asset('frontend/img/blog-1.jpg')}}"
              class="img-fluid w-100 rounded-top"
              alt=""
            />
            <div
              class="blog-content position-relative px-3"
              style="margin-top: 30px"
            >
              <h5 class="">By Daniel Martin</h5>
              <p class="py-2" style="color: black">
                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                interdum. Aliquam dolor eget urna ultricies tincidunt libero
                sit amet
              </p>
            </div>
            <div
              class="blog-coment d-flex justify-content-between px-4 py-2 border rounded-bottom"
              style="background-color: #39b44b"
            >
              <a href="" class="text-white"><small>24 March 2023</small></a>
              <a href="" class="text-white"><small>Read More...</small></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-item position-relative bg-light rounded">
            <img
              src="{{asset('frontend/img/blog-1.jpg')}}"
              class="img-fluid w-100 rounded-top"
              alt=""
            />
            <div
              class="blog-content position-relative px-3"
              style="margin-top: 30px"
            >
              <h5 class="">By Daniel Martin</h5>
              <p class="py-2" style="color: black">
                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                interdum. Aliquam dolor eget urna ultricies tincidunt libero
                sit amet
              </p>
            </div>
            <div
              class="blog-coment d-flex justify-content-between px-4 py-2 border rounded-bottom"
              style="background-color: #39b44b"
            >
              <a href="" class="text-white"><small>24 March 2023</small></a>
              <a href="" class="text-white"><small>Read More...</small></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-item position-relative bg-light rounded">
            <img
              src="{{asset('frontend/img/blog-1.jpg')}}"
              class="img-fluid w-100 rounded-top"
              alt=""
            />
            <div
              class="blog-content position-relative px-3"
              style="margin-top: 30px"
            >
              <h5 class="">By Daniel Martin</h5>
              <p class="py-2" style="color: black">
                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                interdum. Aliquam dolor eget urna ultricies tincidunt libero
                sit amet
              </p>
            </div>
            <div
              class="blog-coment d-flex justify-content-between px-4 py-2 border rounded-bottom"
              style="background-color: #39b44b"
            >
              <a href="" class="text-white"><small>24 March 2023</small></a>
              <a href="" class="text-white"><small>Read More...</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
        <a
          href=""
          class="btn btn-primary"
          style="background-color: #e82629; border-color: #e82629"
          >See More...</a
        >
      </div>
    </div>
  </div>
  <!-- Blog End -->

  <!-- Our Videos Start -->
  <div class="container-fluid testimonial py-5">
    <div class="container">
      <div
        class="text-center mx-auto pb-5 wow fadeIn"
        data-wow-delay=".3s"
        style="max-width: 600px"
      >
        <h5 class="text-primary">Our Videos</h5>
        <h1>Our Press Conference & Videos</h1>
      </div>
      <div
        class="owl-carousel testimonial-carousel wow fadeIn"
        data-wow-delay=".5s"
      >
        <div class="youtube-video-card">
          <div class="youtube-video-wrapper">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="video-content">
            <h4 class="video-title text-secondary">Video Title</h4>
            <p class="video-description">
              This is a description of the YouTube video. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.
            </p>
            <div class="video-details d-flex justify-content-between">
              <small class="text-muted">Published on: March 24, 2023</small>
              <a href="#" class="text-primary">Watch on YouTube</a>
            </div>
          </div>
        </div>

        <div class="youtube-video-card">
          <div class="youtube-video-wrapper">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="video-content">
            <h4 class="video-title text-secondary">Video Title</h4>
            <p class="video-description">
              This is a description of the YouTube video. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.
            </p>
            <div class="video-details d-flex justify-content-between">
              <small class="text-muted">Published on: March 24, 2023</small>
              <a href="#" class="text-primary">Watch on YouTube</a>
            </div>
          </div>
        </div>
        <div class="youtube-video-card">
          <div class="youtube-video-wrapper">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="video-content">
            <h4 class="video-title text-secondary">Video Title</h4>
            <p class="video-description">
              This is a description of the YouTube video. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.
            </p>
            <div class="video-details d-flex justify-content-between">
              <small class="text-muted">Published on: March 24, 2023</small>
              <a href="#" class="text-primary">Watch on YouTube</a>
            </div>
          </div>
        </div>
        <div class="youtube-video-card">
          <div class="youtube-video-wrapper">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="video-content">
            <h4 class="video-title text-secondary">Video Title</h4>
            <p class="video-description">
              This is a description of the YouTube video. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.
            </p>
            <div class="video-details d-flex justify-content-between">
              <small class="text-muted">Published on: March 24, 2023</small>
              <a href="#" class="text-primary">Watch on YouTube</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
        <a
          href=""
          class="btn btn-primary"
          style="background-color: #e82629; border-color: #e82629"
          >See More...</a
        >
      </div>
    </div>
  </div>

  <!-- Our Videos End -->

  <!-- Team Start -->
  <div class="container-fluid bg-light py-5 team">
    <div class="container">
      <div
        class="text-center mx-auto pb-5 wow fadeIn"
        data-wow-delay=".3s"
        style="max-width: 600px"
      >
        <h5 class="text-primary">Party Member</h5>
        <h1>Central Executive Committee</h1>
      </div>
      <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
        <div class="rounded team-item">
          <div class="team-content">
            <div class="team-img-icon">
              <div class="team-img rounded-circle">
                <img
                  src="{{asset('frontend/img/team-2.jpg')}}"
                  class="img-fluid w-100 rounded-circle"
                  alt=""
                />
              </div>
              <div class="team-name text-center pt-3">
                <h4 class="">Shah Mohammad Abu Zafar</h4>
                <p class="m-0">Chairman</p>
                <p>Bangladesh Nationalist Movement- BNM</p>
              </div>
              <div class="team-icon d-flex justify-content-center pb-4">
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="rounded team-item">
          <div class="team-content">
            <div class="team-img-icon">
              <div class="team-img rounded-circle">
                <img
                  src="{{asset('frontend/img/team-2.jpg')}}"
                  class="img-fluid w-100 rounded-circle"
                  alt=""
                />
              </div>
              <div class="team-name text-center pt-3">
                <h4 class="">Shah Mohammad Abu Zafar</h4>
                <p class="m-0">Chairman</p>
                <p>Bangladesh Nationalist Movement- BNM</p>
              </div>
              <div class="team-icon d-flex justify-content-center pb-4">
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="rounded team-item">
          <div class="team-content">
            <div class="team-img-icon">
              <div class="team-img rounded-circle">
                <img
                  src="{{asset('frontend/img/team-2.jpg')}}"
                  class="img-fluid w-100 rounded-circle"
                  alt=""
                />
              </div>
              <div class="team-name text-center pt-3">
                <h4 class="">Shah Mohammad Abu Zafar</h4>
                <p class="m-0">Chairman</p>
                <p>Bangladesh Nationalist Movement- BNM</p>
              </div>
              <div class="team-icon d-flex justify-content-center pb-4">
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="rounded team-item">
          <div class="team-content">
            <div class="team-img-icon">
              <div class="team-img rounded-circle">
                <img
                  src="{{asset('frontend/img/team-2.jpg')}}"
                  class="img-fluid w-100 rounded-circle"
                  alt=""
                />
              </div>
              <div class="team-name text-center pt-3">
                <h4 class="">Shah Mohammad Abu Zafar</h4>
                <p class="m-0">Chairman</p>
                <p>Bangladesh Nationalist Movement- BNM</p>
              </div>
              <div class="team-icon d-flex justify-content-center pb-4">
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-square btn text-white rounded-circle m-1"
                  href=""
                  style="background-color: #39b44b"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
        <a
          href=""
          class="btn btn-primary"
          style="background-color: #e82629; border-color: #e82629"
          >See More...</a
        >
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Contact Start -->

  <!-- Contact Start -->
  <div class="container-fluid py-4">
    <div class="container py-4">
      <div class="contact p-4 bg-light">
        <div class="row g-4">
          <div class="col-xl-5">
            <h1 class="mb-4">Get in touch</h1>
            <p class="mb-4">
              The contact form is currently inactive. Get a functional and
              working contact form with Ajax & PHP in a few minutes. Just copy
              and paste the files, add a little code and you're done.
              <a
                class="text-dark fw-bold"
                href="https://htmlcodex.com/contact-form"
                >Download Now</a
              >.
            </p>
            <form>
              <div class="row gx-4 gy-3">
                <div class="col-xl-6">
                  <input
                    type="text"
                    class="form-control bg-white border-0 py-3 px-4"
                    placeholder="Your First Name"
                  />
                </div>
                <div class="col-xl-6">
                  <input
                    type="email"
                    class="form-control bg-white border-0 py-3 px-4"
                    placeholder="Your Email"
                  />
                </div>
                <div class="col-xl-6">
                  <input
                    type="text"
                    class="form-control bg-white border-0 py-3 px-4"
                    placeholder="Your Phone"
                  />
                </div>
                <div class="col-xl-6">
                  <input
                    type="text"
                    class="form-control bg-white border-0 py-3 px-4"
                    placeholder="Subject"
                  />
                </div>
                <div class="col-12">
                  <textarea
                    class="form-control bg-white border-0 py-3 px-4"
                    rows="7"
                    cols="10"
                    placeholder="Your Message"
                  ></textarea>
                </div>
                <div class="col-12">
                  <button
                    class="btn-hover-bg btn btn-primary w-100 py-3 px-5"
                    type="submit"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-xl-7">
            <div>
              <div class="row g-4">
                <div class="col-lg-4">
                  <div class="bg-white p-4">
                    <i
                      class="fas fa-map-marker-alt fa-2x text-primary mb-2"
                    ></i>
                    <h4>Address</h4>
                    <p class="mb-0">123 street New York</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="bg-white p-4">
                    <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                    <h4>Mail Us</h4>
                    <p class="mb-0">info@example.com</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="bg-white p-4">
                    <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                    <h4>Telephone</h4>
                    <p class="mb-0">(+012) 3456 7890 123</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <iframe
                    class="w-100"
                    style="height: 412px; margin-bottom: -6px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
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
            $("#home-home").addClass('active');
        });

    </script>
@endsection
