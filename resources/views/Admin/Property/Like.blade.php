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
                                @php
                                    $Ptype = DB::table('propertieskinds')
                                        ->where('id', $item->ptype)
                                        ->first();
                                    $Ptype2 = DB::table('propertieskinds')
                                        ->where('id', $item->ptype2)
                                        ->first();
                                @endphp
                                <tr style="line-height: 1;">
                                    <td> <img style="width: 92px;" src="{{ '/images/' . $item->image }}" alt=""></td>
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
                                        <td> <span class="badge badge-primary">Not Approved</span></td>
                                    @endif
                                    <td class="d-flex">
                                        <form method="POST" action="{{ url('usersLikeP/' . $item->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="POST">
                                            <button style="margin: 4px;" type="submit"
                                                class="btn btn-sm btn-primary  show_confirm" data-toggle="tooltip"
                                                title='Delete'><i class="fa fa-heart" aria-hidden="true"></i>
                                            </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to dislike`,
                    text: "If you remove, it will be gone forever.",
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
