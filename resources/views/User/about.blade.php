@extends('layouts.website')
<style>
    .img-fluid {
    max-width: 100%;
    height: inherit;
    width: 400px;
}
</style>

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="{{ asset('user/img/header.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="row g-5 align-items-center ">
                <div class="col-lg-6 wow fadeIn " data-wow-delay="0.1s ">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0 ">
                        <img class="img-fluid w-100 " src="{{ asset('user/img/about.jpg') }} ">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn " data-wow-delay="0.5s ">
                    <h1 class="mb-4 ">#1 Place To Find The Perfect Property</h1>
                    <p class="mb-4 ">FSBO is about selling, buying and renting property through the internet such as
                        plots, apartments, houses, etc.The mission of FSBO is to make Pakistani real estate accessible
                        and convenient for everyone.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>User-friendly and convenient.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage property portfolio.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage inventory.</p>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-3 " href=" ">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="text-center mx-auto mb-5 wow fadeInUp " data-wow-delay="0.1s " style="max-width: 600px; ">
                <h1 class="mb-3 ">Popular Agents</h1>
            </div>
            <div class="row g-4 ">

                @foreach ($userTeam as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
                        <div class="team-item rounded overflow-hidden ">
                            <div class="position-relative ">
                                <img class="img-fluid " src="{{ asset('images/' . $item->avatar) }} "
                                    alt=" ">
                                {{-- <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                                </div> --}}
                            </div>
                            <div class="text-center p-4 mt-3 ">
                                <h5 style="font-size: 17px;" class="fw-bold mb-0 ">{{ $item->name }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination-wrapper">
                    {{ $userTeam->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="text-center mx-auto mb-5 wow fadeInUp " data-wow-delay="0.1s " style="max-width: 600px; ">
                <h1 class="mb-3 ">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp " data-wow-delay="0.1s ">
                <div class="testimonial-item bg-light rounded p-3 ">
                    <div class="bg-white border rounded p-4 ">
                        <p>Very user friendly. Makes it easy to manage all the tasks that come with real estate
                            agencies.</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded "
                                src="{{ asset('user/img/testimonial 11.jpg') }} " style="width: 45px; height: 45px; ">
                            <div class="ps-3 ">
                                <h6 class="fw-bold mb-1 ">Amir Hussain</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3 ">
                    <div class="bg-white border rounded p-4 ">
                        <p>This Website is incredibly user-friendly with an attractive interface that makes managing my
                            real estate portfolio so much easier.</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded "
                                src="{{ asset('user/img/testimonial 12.jpg') }} " style="width: 45px; height: 45px; ">
                            <div class="ps-3 ">
                                <h6 class="fw-bold mb-1 ">Farhan Saeed</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3 ">
                    <div class="bg-white border rounded p-4 ">
                        <p>This website is really helping me in managing my properties, the user interface is very
                            simple, i can manage my inventory, staff commission and sales very easily.</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded "
                                src="{{ asset('user/img/testimonial 13.jpg') }} " style="width: 45px; height: 45px; ">
                            <div class="ps-3 ">
                                <h6 class="fw-bold mb-1 ">Faizan Ahmed</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
