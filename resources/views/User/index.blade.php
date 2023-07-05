@extends('layouts.website')

@section('content')
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

<div class="container-fluid bg-primary mb-5 wow fadeIn " data-wow-delay="0.1s " style="padding: 35px; ">
    <div class="container ">
        <div class="row g-2 ">
            <div class="col-md-10 ">
                <div class="row g-2 ">
                    <div class="col-md-4 ">
                        <input type="text " class="form-control border-0 py-3 " placeholder="Search Keyword ">
                    </div>
                    <div class="col-md-4 ">
                        <select class="form-select border-0 py-3 ">
                            <option selected>Property Type</option>
                            <option value="1 ">Property Type 1</option>
                            <option value="2 ">Property Type 2</option>
                            <option value="3 ">Property Type 3</option>
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
                <a href="property-list.html " class="btn btn-dark border-0 w-100 py-3 ">Search</a>
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
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-apartment.png') }}"
                                alt="Icon">
                        </div>
                        <h6>Apartment</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-villa.png') }}" alt="Icon">
                        </div>
                        <h6>Villa</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-house.png') }}" alt="Icon">
                        </div>
                        <h6>Home</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-housing.png') }}" alt="Icon">
                        </div>
                        <h6>Office</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-building.png') }}" alt="Icon">
                        </div>
                        <h6>Building</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-neighborhood.png') }}"
                                alt="Icon">
                        </div>
                        <h6>Townhouse</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-condominium.png') }}"
                                alt="Icon">
                        </div>
                        <h6>Shop</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('user/img/icon-luxury.png') }}" alt="Icon">
                        </div>
                        <h6>Garage</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->

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
                    plots, apartments, houses, etc.The mission of FSBO is to make Pakistani real estate accessible and
                    convenient for everyone.</p>
                <p><i class="fa fa-check text-primary me-3 "></i>User-friendly and convenient.</p>
                <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage property portfolio.</p>
                <p><i class="fa fa-check text-primary me-3 "></i>Easy to manage inventory.</p>
                <a class="btn btn-primary py-3 px-5 mt-3 " href=" ">Read More</a>
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
                <div class="text-start mx-auto mb-5 wow slideInLeft " data-wow-delay="0.1s ">
                    <h1 class="mb-3 ">Properties</h1>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight " data-wow-delay="0.1s ">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5 ">
                    <li class="nav-item me-2 ">
                        <a class="btn btn-outline-primary active " data-bs-toggle="pill " href="#tab-1 ">Featured</a>
                    </li>
                    <li class="nav-item me-2 ">
                        <a class="btn btn-outline-primary " data-bs-toggle="pill " href="#tab-2 ">For Sell</a>
                    </li>
                    <li class="nav-item me-0 ">
                        <a class="btn btn-outline-primary " data-bs-toggle="pill " href="#tab-3 ">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content ">
            <div id="tab-1 " class="tab-pane fade show p-0 active ">
                <div class="row g-4 ">
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 1.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Appartment</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 70,345 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Appartment For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.3s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 2.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Villa</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 75,000</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Villa For Rent</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.5s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 3.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Home</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 65,345 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Home For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid " src="{{ asset('user/img/shop.jpg') }} "
                                        alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Shop</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 70,000</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Shop For Rent</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Rooms</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.3s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/building.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Building</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 700,000 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Building For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Floors</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>4 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.5s ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/office.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Office</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 80,000</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Office For Rent</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Rooms</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp " data-wow-delay="0.1s ">
                        <a class="btn btn-primary py-3 px-5 " href=" ">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-2 " class="tab-pane fade show p-0 ">
                <div class="row g-4 ">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 7.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Appartment</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 85,345 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Rooms</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 8.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Villa</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 78,000</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 9.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Office</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 69,345 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Rooms</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/lahore 10.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Building</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 82,000 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Rent</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/sialkot 11.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Home</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 72,345 Lakh</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/sialkot 12.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Shop</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">PKR 78,000</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, Sialkot, Pakistan
                                </p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center ">
                        <a class="btn btn-primary py-3 px-5 " href=" ">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-3 " class="tab-pane fade show p-0 ">
                <div class="row g-4 ">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-1.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Appartment</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-2.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Villa</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-3.jpg ') }}" alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Office</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-4.jpg ') }}" alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Building</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-5.jpg') }} " alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Home</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="property-item rounded overflow-hidden ">
                            <div class="position-relative overflow-hidden ">
                                <a href=" "><img class="img-fluid "
                                        src="{{ asset('user/img/property-6.jpg ') }}" alt=" "></a>
                                <div
                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3 ">
                                    For Rent</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3 ">
                                    Shop</div>
                            </div>
                            <div class="p-4 pb-0 ">
                                <h5 class="text-primary mb-3 ">$12,345</h5>
                                <a class="d-block h5 mb-2 " href=" ">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-ruler-combined text-primary me-2 "></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2 "><i
                                        class="fa fa-bed text-primary me-2 "></i>3 Bed</small>
                                <small class="flex-fill text-center py-2 "><i
                                        class="fa fa-bath text-primary me-2 "></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center ">
                        <a class="btn btn-primary py-3 px-5 " href=" ">Browse More Property</a>
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
                    <div class="col-lg-6 wow fadeIn " data-wow-delay="0.1s ">
                        <img class="img-fluid rounded w-100 " src="{{ asset('user/img/call-to-action.jpg') }} "
                            alt=" ">
                    </div>
                    <div class="col-lg-6 wow fadeIn " data-wow-delay="0.5s ">
                        <div class="mb-4 ">
                            <h1 class="mb-3 ">Contact With Our Certified Agent</h1>
                            <p>Real Estate Agents usually specialize in either commercial or residential real estate.
                            </p>
                        </div>
                        <a href=" " class="btn btn-primary py-3 px-4 me-2 "><i
                                class="fa fa-phone-alt me-2 "></i>Make A Call</a>
                        <a href=" " class="btn btn-dark py-3 px-4 "><i class="fa fa-calendar-alt me-2 "></i>Get
                            Appoinment</a>
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
        <div class="text-center mx-auto mb-5 wow fadeInUp " data-wow-delay="0.1s " style="max-width: 600px; ">
            <h1 class="mb-3 ">Popular Property Dealers</h1>
        </div>
        <div class="row g-4 ">
            <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
                <div class="team-item rounded overflow-hidden ">
                    <div class="position-relative ">
                        <img class="img-fluid " src="{{ asset('user/img/testimonial 15.jpg') }} " alt=" ">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3 ">
                        <h5 class="fw-bold mb-0 ">Mahsood Rehman</h5>
                        <small>View Profile</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.3s ">
                <div class="team-item rounded overflow-hidden ">
                    <div class="position-relative ">
                        <img class="img-fluid " src="{{ asset('user/img/testimonial 17.jpg') }} " alt=" ">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3 ">
                        <h5 class="fw-bold mb-0 ">Ali Raza</h5>
                        <small>View Profile</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.5s ">
                <div class="team-item rounded overflow-hidden ">
                    <div class="position-relative ">
                        <img class="img-fluid " src="{{ asset('user/img/testimonial 16.jpg') }} " alt=" ">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3 ">
                        <h5 class="fw-bold mb-0 ">Saqib Khurshid</h5>
                        <small>View Profile</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.7s ">
                <div class="team-item rounded overflow-hidden ">
                    <div class="position-relative ">
                        <img class="img-fluid " src="{{ asset('user/img/testimonial 18.jpg') }} " alt=" ">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center ">
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-twitter "></i></a>
                            <a class="btn btn-square mx-1 " href=" "><i class="fab fa-instagram "></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3 ">
                        <h5 class="fw-bold mb-0 ">Muneer Ali</h5>
                        <small>View Profile</small>
                    </div>
                </div>
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
