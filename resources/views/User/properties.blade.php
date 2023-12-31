@extends('layouts.website')

@section('content')
    <style>
        svg.w-5.h-5 {
            height: 32px;
        }
    </style>

    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Properties</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Properties</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="{{ asset('user/img/header.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Property List Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="row g-4 ">
                @foreach ($property as $item)
                        @php
                            $Ptype = DB::table('propertieskinds')
                                ->where('id', $item->ptype)
                                ->first();
                            $Ptype2 = DB::table('propertieskinds')
                                ->where('id', $item->ptype2)
                                ->first();
                            $money = $item->price;
                        @endphp
                        <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s ">
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
                    {{ $property->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->
@endsection
