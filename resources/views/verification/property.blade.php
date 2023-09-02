@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="#" id="openDealerAdd" class="btn btn-sm btn-primary pull-right">Add new</a>
                </div>
                <!-- /.card-header -->
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
                                <th>Agent name</th>
                                <th>Property Name</th>
                                <th>Dealer Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userPending as $index=> $item )
                                @php
                                    $useAGent=DB::table('users')->where('id',$item->agent_id)->first();
                                    $useDealer=DB::table('properties')->where('id',$item->users_id)->first();
                                    $useDealerName=DB::table('users')->where('id',$useDealer->user_id)->first();
                                @endphp
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $useAGent->name }}</td>
                                    <td>{{ $useDealer->name }}</td>
                                    <td>{{ $useDealerName->name }}</td>
                                    <td>
                                        @if ($item->status=='1')
                                            Pending
                                        @else
                                            Approved
                                        @endif
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('propertyverificationDeleted/' . $item->id) }}">
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Dealer Verfication</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/propertyverificationAdd" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Agent Name</label>
                            <select name="agentname" id="agentname" class="form-control">
                                @foreach ($agent as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Dealer Name</label>
                            <select name="dealername" id="dealername" class="form-control">
                                @foreach ($users as $user)
                                    @if (isset($user))
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Property status</label>
                            <input type="text" hidden id="pID" name="pID" class="pID">
                            <input type="text" hidden id="UID" name="UID" class="UID">
                            <select name="status" id="status" class="form-control">
                                <option value="0">Rejected</option>
                                <option value="2">Accept</option>
                            </select>
                        </div> --}}
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
        $(document).ready(function() {
            $('#openDealerAdd').on('click', function() {
                $('.exampleModalCenter').modal('show');
            });
        })

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
