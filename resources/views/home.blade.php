    @extends('layouts.admin')
    @section('content')
        @php
            $propertyISellAd = DB::table('properties')
                ->where('type', 'sell')
                ->count();
            $propertyIRentlAd = DB::table('properties')
                ->where('type', 'rent')
                ->count();
            $likeproperty = DB::table('likeproperty')->count();
            $agentCount = DB::table('users')
                ->where('role_id', '2')
                ->count();
            $dealerCount = DB::table('users')
                ->where('role_id', '3')
                ->count();
            $customerCount = DB::table('users')
                ->where('role_id', '4')
                ->count();
            $bookingCountAD = DB::table('booking')
                ->where('booking_id', '1')
                ->count();
            $appCountAD = DB::table('booking')
                ->where('appointment_id', '1')
                ->count();

            // Dealer

            $bookingCountADMY = DB::table('booking')
                ->where('booking_id', '1')
                ->where('user_id', Auth::user()->id)
                ->count();
            $appCountADMY = DB::table('booking')
                ->where('appointment_id', '1')
                ->where('user_id', Auth::user()->id)
                ->count();

            $bookingCountADUSER = DB::table('booking')
                ->where('booking_id', '1')
                ->where('contactuser_id', Auth::user()->id)
                ->count();
            $appCountADUSER = DB::table('booking')
                ->where('appointment_id', '1')
                ->where('contactuser_id', Auth::user()->id)
                ->count();
            $likepropertyUSER = DB::table('likeproperty')
                ->where('user_id', Auth::user()->id)
                ->count();

            $propertyISellAdUSER = DB::table('properties')
                ->where('type', 'sell')
                ->where('user_id', Auth::user()->id)
                ->count();
            $propertyIRentlAdUSER = DB::table('properties')
                ->where('type', 'rent')
                ->where('user_id', Auth::user()->id)
                ->count();

        @endphp
        <div class="row">
            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2')
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Rent Property</span>
                            <span class="info-box-number">{{ $propertyISell }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Sell Property</span>
                            <span class="info-box-number">{{ $propertyIRentlAd }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Like Property</span>
                            <span class="info-box-number">{{ $likeproperty }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Number of Agent</span>
                            <span class="info-box-number">{{ $agentCount }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Number of Dealer</span>
                            <span class="info-box-number">{{ $dealerCount }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Number of Customers</span>
                            <span class="info-box-number">{{ $customerCount }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Number of Bookings</span>
                            <span class="info-box-number">{{ $bookingCountAD }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Number of Appointment</span>
                            <span class="info-box-number">{{ $appCountAD }}</span>
                        </div>
                    </div>
                </div>
            @elseif (Auth::user()->role_id == '3' || Auth::user()->role_id == '3')
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">My Booking</span>
                            <span class="info-box-number">{{ $bookingCountADMY }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">My Appointment</span>
                            <span class="info-box-number">{{ $appCountADMY }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">User's Booking</span>
                            <span class="info-box-number">{{ $bookingCountADUSER }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">User's Appointment</span>
                            <span class="info-box-number">{{ $appCountADUSER }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box shadow-none">
                        <div class="info-box-content">
                            <span class="info-box-text">Like Property</span>
                            <span class="info-box-number">{{ $likepropertyUSER }}</span>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->role_id == '3')
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box shadow-none">
                            <div class="info-box-content">
                                <span class="info-box-text">My Rent Property</span>
                                <span class="info-box-number">{{ $propertyIRentlAdUSER }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box shadow-none">
                            <div class="info-box-content">
                                <span class="info-box-text">My Sell Property</span>
                                <span class="info-box-number">{{ $propertyISellAdUSER }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    @endsection
