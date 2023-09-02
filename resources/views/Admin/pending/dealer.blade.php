@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                {{-- <div class="card-header"> --}}
                {{-- <h3 class="card-title">{{ $title }}</h3> --}}
                {{-- <a href="/addUser" class="btn btn-sm btn-primary pull-right">Add new</a> --}}
                {{-- </div> --}}
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>role</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr style="line-height:2;">
                                    <td>{{ $item->id }}</td>
                                    <td> <img style="width: 45px;" src="{{ '/images/' . $item->avatar }}" alt="">
                                    </td>
                                    <td> {{ $item->name }}</td>
                                    <td>
                                        @if ($item->role_id == '3')
                                            Dealer
                                        @elseif ($item->role_id == '1')
                                            Admin
                                        @elseif ($item->role_id == '2')
                                            Agent
                                        @elseif ($item->role_id == '4')
                                            Customer
                                        @endif
                                    </td>
                                    <td> {{ $item->address }}</td>
                                    <td> {{ $item->email }}</td>
                                    <td> {{ $item->phone }}</td>
                                    <td>
                                        @if ($item->status == '2')
                                            Active
                                        @else
                                            Not Active
                                        @endif
                                    </td>
                                    <td class="d-flex">
                                        <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                            <i class="fa fa-book" onclick="addBooking({{ $item->id }})"
                                                aria-hidden="true"></i>
                                        </button>
                                        <form method="POST" action="{{ url('/delete/users/' . $item->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button style="margin: 4px;" type="submit"
                                                class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Dealer Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/usersApproved" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Dealer status</label>
                            <input type="text" hidden id="pID" name="pID" class="pID">
                            <select name="status" id="status" class="form-control">
                                <option value="2">Not Approved</option>
                                <option value="1">Approved</option>
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
        function addBooking(itemId) {
            $('.exampleModalCenter').modal('show');
            $('.pID').val(itemId);
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
