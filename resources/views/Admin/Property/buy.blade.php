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
                                        <td>Pending</td>
                                    @elseif($item->status == '1')
                                        <td>Not Sale</td>
                                    @elseif($item->status == '2')
                                        <td>Sale</td>
                                    @endif
                                    <td class="d-flex">
                                        <a href="{{ url('propertyedit/' . $item->id) }}"
                                            style="margin-top: 4px;height: 32px;" class="btn btn-sm btn-primary"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <form method="POST" action="{{ url('propertydelete/' . $item->id) }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
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