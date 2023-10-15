@extends('layouts.website')

@section('content')
    <style>
        svg.w-5.h-5 {
            height: 32px;
        }
    </style>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0 ">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row ">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                <div class="col-md-12 animated fadeIn ">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="height: 707px;  filter: blur(1.1px); -webkit-filter: blur(1.1px);"
                                    src="{{ asset('user/img/carousel-1.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 4.25rem;margin-bottom: 10.5rem; color: white;">
                                        The best investment on earth is earth
                                        <br>
                                        <p style="text-align: ce;font-size: 19px;">Louis Glickman</p>
                                    </h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="height: 707px;  filter: blur(1.1px); -webkit-filter: blur(1.1px);"
                                    src="{{ asset('user/img/carousel-2.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 4.25rem;color: white;margin-bottom: 10.5rem;">
                                        Price is what you pay. value is what you get
                                        <br>
                                        <p style="text-align: ce;font-size: 19px;">Warren Buffett</p>
                                    </h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="height: 707px;  filter: blur(1.1px); -webkit-filter: blur(1.1px);"
                                    src="{{ asset('user/img/property-1.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 4.25rem;color: white;margin-bottom: 10.5rem;">
                                        Managing your own property can be a full-time job
                                        <br>
                                        <p style="text-align: ce;font-size: 19px;">Louis Glickman</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->

    <div class="container-fluid bg-primary mb-5 wow fadeIn " style="padding: 35px; ">
        <div class="container ">
            <div class="row g-2 ">
                <div class="col-md-10 ">
                    <div class="row g-2 ">
                        <div class="col-md-4 ">
                            <select class="form-select border-0 py-3 ">
                                <option selected>Select Type</option>
                                <option value="1 ">Rent</option>
                                <option value="2 ">Sell</option>
                            </select>
                        </div>
                        <div class="col-md-4 ">
                            <select class="form-select border-0 py-3 ">
                                <option selected>Type</option>
                                @foreach ($propetyType as $item)
                                    <option >{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 ">
                            <select class="form-select border-0 py-3 ">
                                <option selected>Location</option>
                                <option value="1 ">Location 1</option>
                                <option value="2 ">Location 2</option>
                                <option value="3 ">Location 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <a href="/properties " class="btn btn-dark border-0 w-100 py-3 ">Search</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Property Types</h1>
            </div>
            <div class="row g-4">
                @foreach ($propetyType as $item)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="/properties">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="Icon">
                                </div>
                                <h6>{{ $item->name }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category End -->

    <!-- About Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="row g-5 align-items-center ">
                <div class="col-lg-6 wow fadeIn ">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0 ">
                        <img class="img-fluid w-100 " src="{{ asset('user/img/about.jpg') }} ">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn " data-wow-delay="0.5s ">
                    <h1 class="mb-4 ">#1 Place To Find The Perfect Property</h1>
                    <p class="mb-4 ">FSBO is about selling, buying and renting property through the internet such as
                        plots, apartments, houses, etc.The mission of FSBO is to make Pakistani real estate accessible and
                        convenient for everyone.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>User-friendly and convenient.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage property portfolio.</p>
                    <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage inventory.</p>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-3 " href="/properties">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Property List Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="row g-0 gx-5 align-items-end ">
                <div class="col-lg-6 ">
                    <div class="text-start mx-auto mb-5 wow slideInLeft ">
                        <h1 class="mb-3 ">Properties</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight ">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5 " id="pills-tab" role="tablist">
                        <li class="nav-item me-2 ">
                            <button class="btn btn-outline-primary active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item me-2 ">
                            <button class="btn btn-outline-primary" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">For Sell</button>
                        </li>
                        <li class="nav-item me-0 ">
                            <button class="btn btn-outline-primary" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">For Rent</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row g-4 ">
                        @foreach ($property as $item)
                            @if ($item->feature == '1')
                                @php
                                    $Ptype = DB::table('propertieskinds')
                                        ->where('id', $item->ptype)
                                        ->first();
                                    $Ptype2 = DB::table('propertieskinds')
                                        ->where('id', $item->ptype2)
                                        ->first();
                                    $money = $item->price;
                                @endphp
                                <div class="col-lg-4 col-md-6 wow fadeInUp ">
                                    <a href="{{ url('propertyView/' . $item->id) }}">
                                        <div class="property-item rounded overflow-hidden ">
                                            <div class="position-relative overflow-hidden ">
                                                <a href="{{ url('propertyView/' . $item->id) }} "><img
                                                        style="width: -webkit-fill-available; height: 220px;"
                                                        class="img-fluid " src="{{ '/images/' . $item->image }} "
                                                        alt=" "></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                                    For {{ $item->type }} {{ $item->feature == 1 ? ' | Featured' : '' }}
                                                </div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                                    {{ $Ptype->name . ' ' . $Ptype2->name }}</div>
                                            </div>
                                            <div class="p-4 pb-0 ">
                                                <h5 class="text-primary mb-3 ">PKR {{ $money }}</h5>
                                                <a class="d-block h5 mb-2 "
                                                    href="{{ url('propertyView/' . $item->id) }} ">{{ $item->name }}</a>
                                                <p><i
                                                        class="fa fa-map-marker-alt text-primary me-2 "></i>{{ $item->areaname }}
                                                </p>
                                            </div>
                                            <div class="d-flex border-top ">
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-ruler-combined text-primary me-2 "></i>{{ $item->size . ' ' . ' (' . $item->sizeM . ' )' }}</small>
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-bed text-primary me-2 "></i>{{ $item->bedrooms }}
                                                    Bed</small>
                                                <small class="flex-fill text-center py-2 "><i
                                                        class="fa fa-bath text-primary me-2 "></i>{{ $item->bathrooms }}
                                                    Bath</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <div class="pagination-wrapper">
                            {{ $property->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row g-4 ">
                        @foreach ($property as $item)
                            @if ($item->type == 'sell')
                                @php
                                    $Ptype = DB::table('propertieskinds')
                                        ->where('id', $item->ptype)
                                        ->first();
                                    $Ptype2 = DB::table('propertieskinds')
                                        ->where('id', $item->ptype2)
                                        ->first();
                                    $money = $item->price;
                                @endphp
                                <div class="col-lg-4 col-md-6 wow fadeInUp ">
                                    <a href="{{ url('propertyView/' . $item->id) }}">
                                        <div class="property-item rounded overflow-hidden ">
                                            <div class="position-relative overflow-hidden ">
                                                <a href="{{ url('propertyView/' . $item->id) }} "><img
                                                        style="width: -webkit-fill-available; height: 220px;"
                                                        class="img-fluid " src="{{ '/images/' . $item->image }} "
                                                        alt=" "></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                                    For {{ $item->type }} {{ $item->feature == 1 ? ' | Featured' : '' }}
                                                </div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                                    {{ $Ptype->name . ' ' . $Ptype2->name }}</div>
                                            </div>
                                            <div class="p-4 pb-0 ">
                                                <h5 class="text-primary mb-3 ">PKR {{ $money }}</h5>
                                                <a class="d-block h5 mb-2 "
                                                    href="{{ url('propertyView/' . $item->id) }} ">{{ $item->name }}</a>
                                                <p><i
                                                        class="fa fa-map-marker-alt text-primary me-2 "></i>{{ $item->areaname }}
                                                </p>
                                            </div>
                                            <div class="d-flex border-top ">
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-ruler-combined text-primary me-2 "></i>{{ $item->size . ' ' . ' (' . $item->sizeM . ' )' }}</small>
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-bed text-primary me-2 "></i>{{ $item->bedrooms }}
                                                    Bed</small>
                                                <small class="flex-fill text-center py-2 "><i
                                                        class="fa fa-bath text-primary me-2 "></i>{{ $item->bathrooms }}
                                                    Bath</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <div class="pagination-wrapper">
                            {{ $property->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row g-4 ">
                        @foreach ($property as $item)
                            @if ($item->type == 'rent')
                                @php
                                    $Ptype = DB::table('propertieskinds')
                                        ->where('id', $item->ptype)
                                        ->first();
                                    $Ptype2 = DB::table('propertieskinds')
                                        ->where('id', $item->ptype2)
                                        ->first();
                                    $money = $item->price;
                                @endphp
                                <div class="col-lg-4 col-md-6 wow fadeInUp ">
                                    <a href="{{ url('propertyView/' . $item->id) }}">
                                        <div class="property-item rounded overflow-hidden ">
                                            <div class="position-relative overflow-hidden ">
                                                <a href="{{ url('propertyView/' . $item->id) }} "><img
                                                        style="width: -webkit-fill-available; height: 220px;"
                                                        class="img-fluid " src="{{ '/images/' . $item->image }} "
                                                        alt=" "></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                                    For {{ $item->type }} {{ $item->feature == 1 ? ' | Featured' : '' }}
                                                </div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                                    {{ $Ptype->name . ' ' . $Ptype2->name }}</div>
                                            </div>
                                            <div class="p-4 pb-0 ">
                                                <h5 class="text-primary mb-3 ">PKR {{ $money }}</h5>
                                                <a class="d-block h5 mb-2 "
                                                    href="{{ url('propertyView/' . $item->id) }} ">{{ $item->name }}</a>
                                                <p><i
                                                        class="fa fa-map-marker-alt text-primary me-2 "></i>{{ $item->areaname }}
                                                </p>
                                            </div>
                                            <div class="d-flex border-top ">
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-ruler-combined text-primary me-2 "></i>{{ $item->size . ' ' . ' (' . $item->sizeM . ' )' }}</small>
                                                <small class="flex-fill text-center border-end py-2 "><i
                                                        class="fa fa-bed text-primary me-2 "></i>{{ $item->bedrooms }}
                                                    Bed</small>
                                                <small class="flex-fill text-center py-2 "><i
                                                        class="fa fa-bath text-primary me-2 "></i>{{ $item->bathrooms }}
                                                    Bath</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <div class="pagination-wrapper">
                            {{ $property->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->

    <!-- Call to Action Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="bg-light rounded p-3 ">
                <div class="bg-white rounded p-4 " style="border: 1px dashed rgba(0, 185, 142, .3) ">
                    <div class="row g-5 align-items-center ">
                        <div class="col-lg-6 wow fadeIn ">
                            <img class="img-fluid rounded w-100 " src="{{ asset('user/img/call-to-action.jpg') }} "
                                alt=" ">
                        </div>
                        <div class="col-lg-6 wow fadeIn " data-wow-delay="0.5s ">
                            <div class="mb-4 ">
                                <h1 class="mb-3 ">Contact With Our Certified Agent</h1>
                                <p>Real Estate Agents usually specialize in either commercial or residential real estate.
                                </p>
                            </div>
                            <a href="/Chat" class="btn btn-primary py-3 px-4 me-2 "><i
                                    class="fa fa-phone-alt me-2 "></i>Make a Chat</a>
                            {{-- <a href="#" class="btn btn-dark py-3 px-4 "><i class="fa fa-calendar-alt me-2 "></i>Get
                                Booking</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->





    <!-- Team Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="text-center mx-auto mb-5 wow fadeInUp " style="max-width: 600px; ">
                <h1 class="mb-3 ">Popular Property Dealers</h1>
            </div>
            <div class="row g-4 ">

                @foreach ($userTeam as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp ">
                        <div class="team-item rounded overflow-hidden ">
                            <div class="position-relative ">
                                <img class="img-fluid " src="{{ asset('images/' . $item->avatar) }} " alt=" ">
                                {{-- <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                                    <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                                </div> --}}
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="text-center mx-auto mb-5 wow fadeInUp " style="max-width: 600px; ">
                <h1 class="mb-3 ">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp ">
                <div class="testimonial-item bg-light rounded p-3 ">
                    <div class="bg-white border rounded p-4 ">
                        <p>Very user friendly. Makes it easy to manage all the tasks that come with real estate agencies.
                        </p>
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
                        <p>This Website is incredibly user-friendly with an attractive interface that makes managing my real
                            estate portfolio so much easier.</p>
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
                        <p>This website is really helping me in managing my properties, the user interface is very simple, i
                            can manage my inventory, staff commission and sales very easily.</p>
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
