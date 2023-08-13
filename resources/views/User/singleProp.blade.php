@extends('layouts.website')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script type="text/javascript" src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js></script>
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

@section('content')
    <style>
        button.close {
            background: white;
            border: none;
        }

        button.btn.btn-dark.py-3.px-4.me-2.pl-2 {
            margin-left: 16px;
        }

        .img-fluid {
            max-width: 100%;
            height: 450px;
        }

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


    <!-- About Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row g-5 align-items-center ">
                <div class="col-lg-6 wow fadeIn ">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0 ">

                        @php
                            $images = DB::table('galleries')
                                ->where('prop_id', $property->id)
                                ->get();
                        @endphp

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($images as $key => $image)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($images as $key => $image)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ '/images/' . $image->image }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                @php
                    $Ptype = DB::table('propertieskinds')
                        ->where('id', $property->ptype)
                        ->first();
                    $Ptype2 = DB::table('propertieskinds')
                        ->where('id', $property->ptype2)
                        ->first();
                    $user = DB::table('users')
                        ->where('id', $property->user_id)
                        ->first('name');
                @endphp
                <div class="col-lg-6 wow fadeIn ">
                    <h1 class="mb-4 ">{{ $property->name }} <span class="badge badge-primary"> For
                            {{ $property->type }} {{ $property->feature == 1 ? ' | Featured' : '' }}</span>
                        @if (Auth::check())
                            @php
                                $isLike = DB::table('likeproperty')
                                    ->where('user_id', Auth::user()->id)
                                    ->where('property_id', $property->id)
                                    ->where('is_like', '1')
                                    ->first();
                            @endphp
                            @if ($isLike)
                                <form method="POST" style="float: right;"
                                    action="{{ url('/usersLikeP/' . $property->id) }}">
                                    @csrf
                                    <input type="hidden" value="{{ $property->id }}" name="is_like">
                                    <button style="border: none;background: white;" type="submit">
                                        <i style="color: red; float: right;" class="nav-icon fa fa-heart"></i>
                                    </button>
                                </form>
                            @else
                                <form method="POST" style="float: right;"
                                    action="{{ url('/usersLikeP/' . $property->id) }}">
                                    @csrf
                                    <input type="hidden" value="{{ $property->id }}" name="isN_like">
                                    <button style="border: none; background: white;" type="submit">
                                        <i style="float: right;" class="nav-icon fa fa-heart"></i>
                                    </button>
                                </form>
                            @endif
                        @endif

                    </h1>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Dealer Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Area Name</th>
                                <td>{{ $property->areaname }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Type of Property</th>
                                <td>{{ $Ptype->name . ' ' . $Ptype2->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Condition</th>
                                <td>{{ $property->condition }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td>{{ $property->desc }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>{{ $property->price }} PKR </td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                @if ($property->status == 0)
                                    <td><span
                                            style="background: rgb(38, 0, 255);color: white;"class="badge badge-primary">In-stock</span>
                                    </td>
                                @elseif($property->status == 3)
                                    <td><span style="background: red;color: white;" class="badge badge-danger">Sold</span>
                                    </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex border-top ">
                        <small class="flex-fill text-center border-end py-2 "><i
                                class="fa fa-ruler-combined text-primary me-2 "></i>{{ $property->size . ' ' . ' (' . $property->sizeM . ' )' }}</small>
                        <small class="flex-fill text-center border-end py-2 "><i
                                class="fa fa-bed text-primary me-2 "></i>{{ $property->bedrooms }}
                            Bed</small>
                        <small class="flex-fill text-center py-2 "><i
                                class="fa fa-bath text-primary me-2 "></i>{{ $property->bathrooms }}
                            Bath</small>
                    </div>

                    <div class="col-lg-12 wow fadeIn mt-4" style="display:flex">

                        @if ($property->status != '3')
                            @if (Auth::check())
                                @php
                                    $checkBook = DB::table('booking')
                                        ->where('user_id', Auth::user()->id)
                                        ->where('property_id', $property->id)
                                        ->where('booking_id', '1')
                                        ->first();

                                    $checkApp = DB::table('booking')
                                        ->where('user_id', Auth::user()->id)
                                        ->where('property_id', $property->id)
                                        ->where('appointment_id', '1')
                                        ->first();
                                @endphp
                                @if ($checkBook)
                                    <p style="margin: 17px 0px;">Already Booked</p>
                                @else
                                    <button type="button"class="btn btn-primary py-3 px-4 me-2 pl-2" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fa fa-phone-alt me-2 "></i> Get Booking
                                    </button>
                                @endif

                                @if ($checkApp)
                                    <p style="margin: 17px 19px;">Already Appointment</p>
                                @else
                                    <button type="button"class="btn btn-dark py-3 px-4 me-2 pl-2" data-toggle="modal"
                                        data-target="#exampleModalCenter2">
                                        <i class="fa fa-calendar-alt me-2 "></i>Get Appoinment
                                    </button>
                                @endif
                                <a href="{{ url('Chat') }}" class="btn btn-dark py-3 px-4 me-2 pl-2">
                                    <i class="fa fa-commenting "></i>
                                </a>

                            @else
                                <p style="margin: 17px 19px;">Your are Not Already Login</p>
                                <a href="{{ url('login') }}" class="btn btn-primary py-3 px-4 me-2 pl-2">Go to Login</a>
                            @endif
                        @endif


                        <a href="{{ url('/dealer') . '/' . $property->user_id }} " class="btn btn-dark py-3 px-4 pl-2"><i
                                class="fa fa-user me-2 "></i>Get
                            Dealer</a>
                    </div>
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
                        <h1 class="mb-3 ">Related Properties</h1>
                    </div>
                </div>
            </div>
            <div class="tab-content ">
                <div id="tab-1 " class="tab-pane fade show p-0 active ">
                    <div class="row g-4 ">
                        @foreach ($propertylist as $item)
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
                        @endforeach
                        <div class="pagination-wrapper">
                            {{ $propertylist->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->


    <!-- Booking -->
    <div class="modal fade  bd-example-modal-lg" id="exampleModalCenter" tabindex="1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Booking Property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/usersBooking" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" hidden class="form-control" name="pid"
                                        value="{{ $property->id }}" id="pid" required>
                                    <input type="email" readonly value="{{ Auth::user()->email }}"
                                        class="form-control" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" readonly value="{{ Auth::user()->phone }}"
                                        class="form-control" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" value="{{ date('m-d-Y') }}" class="form-control"
                                        name="date" id="date" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" name="price" id="price" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="description" class="form-control" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Appointment -->
    <div class="modal fade  bd-example-modal-lg" id="exampleModalCenter2" tabindex="1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Appointment Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/usersAppointment" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" hidden class="form-control" name="pid"
                                        value="{{ $property->id }}" id="pid" required>
                                    <input type="email" readonly value="{{ Auth::user()->email }}"
                                        class="form-control" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" readonly value="{{ Auth::user()->phone }}"
                                        class="form-control" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" value="{{ date('m-d-Y') }}" class="form-control"
                                        name="date" id="date" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input type="time" class="form-control" name="time" id="time" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" name="price" id="price" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="description" class="form-control" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
