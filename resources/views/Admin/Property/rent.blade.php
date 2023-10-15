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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Property Type</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Area Name</th>
                                <th>Area Size</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property as $item)
                                @if ($item->user_id == Auth::user()->id || Auth::user()->role_id == '1')
                                    @php
                                        $Ptype = DB::table('propertieskinds')
                                            ->where('id', $item->ptype)
                                            ->first();
                                        $Ptype2 = DB::table('propertieskinds')
                                            ->where('id', $item->ptype2)
                                            ->first();
                                    @endphp
                                    <tr style="line-height: 1;">
                                        <td> <img style="width: 92px;" src="{{ '/images/' . $item->image }}" alt="">
                                        </td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $Ptype->name . ' ' . $Ptype2->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->areaname }}</td>
                                        <td>{{ $item->size . ' ' . ' (' . $item->sizeM . ' )' }}</td>
                                        <td>{{ $item->price }}</td>
                                        @if ($item->status == '0')
                                            <td><span class="badge badge-primary">Stock</span></td>
                                        @elseif($item->status == '3')
                                            <td> <span class="badge badge-danger">Sold</span></td>
                                        @elseif($item->status == '10')
                                            <td> <span class="badge badge-danger">Pending</span></td>
                                        @elseif($item->status == '2')
                                            <td> <span class="badge badge-danger">Not Approved</span></td>
                                        @endif
                                        <td class="d-flex">
                                            @if (Auth::user()->role_id == '1')
                                                @if ($item->status != '0')
                                                    <button style="margin: 4px;" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book" onclick="addBooking({{ $item->id }})"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            @endif
                                            @if ($item->status != '3' && Auth::user()->role_id != '1')
                                                <a href="{{ url('propertyedit/' . $item->id) }}"
                                                    style="margin-top: 4px;height: 32px;" class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            @endif
                                            <form method="POST" action="{{ url('propertydelete/' . $item->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="margin: 4px;" type="submit"
                                                    class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Property Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/propertyApproved" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Property status</label>
                            <input type="text" hidden id="pID" name="pID" class="pID">
                            <select name="status" id="status" class="form-control">
                                <option value="2">Not Approved</option>
                                <option value="0">Approved</option>
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
