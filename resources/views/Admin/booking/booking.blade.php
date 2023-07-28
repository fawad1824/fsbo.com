@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>property Name</th>
                                <th>property Dealer</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Price</th>
                                <th>Phone</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $booking = DB::table('booking')
                                    ->where('booking_id', '1')
                                    ->where('user_id', Auth::user()->id)
                                    ->get();
                                $bookingAll = DB::table('booking')
                                    ->where('booking_id', '1')
                                    ->where('contactuser_id', Auth::user()->id)
                                    ->get();

                                $bookingApp = DB::table('booking')
                                    ->where('appointment_id', '1')
                                    ->where('user_id', Auth::user()->id)
                                    ->get();
                                $bookingAppAll = DB::table('booking')
                                    ->where('appointment_id', '1')
                                    ->where('contactuser_id', Auth::user()->id)
                                    ->get();

                                $bookingAppA = DB::table('booking')
                                    ->where('appointment_id', '1')
                                    // ->where('user_id', Auth::user()->id)
                                    ->get();
                                $bookingAppAllA = DB::table('booking')
                                    ->where('booking_id', '1')
                                    // ->where('contactuser_id', Auth::user()->id)
                                    ->get();
                            @endphp
                            @if (Auth::user()->role_id != '1' && $type == 'my_booking')
                                @foreach ($booking as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            @if (Auth::user()->role_id != '1' && $type == 'user_booking')
                                @foreach ($bookingAll as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            @if (Auth::user()->role_id != '1' && $type == 'my_appointment')
                                @foreach ($bookingApp as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            @if (Auth::user()->role_id != '1' && $type == 'users_appointment')
                                @foreach ($bookingAppAll as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            {{-- Admin --}}
                            @if (Auth::user()->role_id == '1' && $type == 'users_appointment')
                                @foreach ($bookingAppA as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            {{-- Admin --}}
                            @if (Auth::user()->role_id == '1' && $type == 'user_booking')
                                @foreach ($bookingAppAllA as $index => $item)
                                    @php
                                        $propD = DB::table('properties')
                                            ->where('id', $item->property_id)
                                            ->first();
                                        $Users = DB::table('users')
                                            ->where('id', $item->user_id)
                                            ->first();
                                        $UsersD = DB::table('users')
                                            ->where('id', $item->contactuser_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $Users->name }}</td>
                                        <td>{{ $propD->name }}</td>
                                        <td>{{ $UsersD->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->desciption }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge badge-danger">Rejected</span>
                                            @elseif ($item->status == '1')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="badge badge-primary">Accept</span>
                                            @else
                                                <span class="badge badge-danger">Sold</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @if ($type == 'user_booking')
                                                @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"
                                                            onclick="addBooking({{ $item->id }},{{ $item->contactuser_id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif

                                            <form method="POST" action="{{ url('/bookingdelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Booking Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/Bookingstatus" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Property status</label>
                            <input type="text" hidden id="pID" name="pID" class="pID">
                            <input type="text" hidden id="UID" name="UID" class="UID">
                            <select name="status" id="status" class="form-control">
                                <option value="0">Rejected</option>
                                <option value="1">Pending</option>
                                <option value="2">Accept</option>
                                <option value="3">Sold</option>
                            </select>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        function addBooking(itemId, UserID) {
            $('.exampleModalCenter').modal('show');
            $('.pID').val(itemId);
            $('.UID').val(UserID);
        }

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
