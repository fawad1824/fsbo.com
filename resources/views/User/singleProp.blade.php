@extends('layouts.website')

@section('content')
    <style>
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
                            {{ $property->type }} {{ $property->feature == 1 ? ' | Featured' : '' }}</span></h1>

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

                    <div class="col-lg-12 wow fadeIn mt-4">
                        <a href=" " class="btn btn-primary py-3 px-4 me-2 "><i class="fa fa-phone-alt me-2 "></i>Get
                            Booking</a>
                        <a href=" " class="btn btn-dark py-3 px-4 "><i class="fa fa-calendar-alt me-2 "></i>Get
                            Appoinment</a>
                        <a href="{{ url('/dealer') . '/' . $property->user_id }} " class="btn btn-dark py-3 px-4 "><i
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
                                                    style="width: -webkit-fill-available; height: 220px;" class="img-fluid "
                                                    src="{{ '/images/' . $item->image }} " alt=" "></a>
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
                                            <p><i class="fa fa-map-marker-alt text-primary me-2 "></i>{{ $item->areaname }}
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
@endsection
