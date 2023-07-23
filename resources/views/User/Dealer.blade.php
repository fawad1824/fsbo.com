@extends('layouts.website')

@section('content')
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 12;
        }

        span.badge.badge-primary {
            background: #00b98e;
            color: white;
            font-size: 12px;
        }

        .carousel-item img {
            width: 100%;
            height: 450px;
        }

        .about-img::before {
            position: absolute;
            content: "";
            top: 0;
            /* z-index: auto; */
            left: -50%;
            width: 100%;
            height: 100%;
            background: var(--primary);
            transform: skew(20deg);
            z-index: inherit;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Dealer</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Dealer</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="{{ asset('user/img/header.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="text-center mx-auto mb-5 wow fadeInUp " data-wow-delay="0.1s " style="max-width: 600px; ">
                <h1 class="mb-3 ">Popular Dealers</h1>
            </div>
            <div class="row g-4 ">

                @foreach ($userTeam as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
                        <div class="team-item rounded overflow-hidden ">
                            <div class="position-relative ">
                                <img class="img-fluid " src="{{ asset('storage/users-avatar/' . $item->avatar) }} "
                                    alt=" ">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3 ">
                                <h5 style="font-size: 17px;" class="fw-bold mb-0 ">{{ $item->name }}</h5>
                                <small><a href="/dealer/{{ $item->id }}">View Profile</a></small>

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
@endsection
