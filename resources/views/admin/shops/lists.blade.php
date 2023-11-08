@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
            </div>
            <div class="ms-auto">
            </div>
        </div>
        
        <br>
        <div>
            <a href="{{ route('shops.add') }}"><button class="btn btn-primary radius-30"><i class="bx bx-plus"></i>Add New</button></a>
        </div>
        <h6 class="mb-0 text-uppercase">Wholesale Table</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Address</th>
                                <th>Other Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip Code</th>
                                <th>Country</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Tel</th>
                                <th>FAX</th>
                                <th>Email</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($shops as $shop)
                            <tr>
                                <td>{{ $shop->address }}</td>
                                <td>{{ $shop->address2 }}</td>
                                <td>{{ $shop->city }}</td>
                                <td>{{ $shop->state }}</td>
                                <td>{{ $shop->zip_code }}</td>
                                <td>{{ $shop->country }}</td>
                                <td>{{ $shop->latitude }}</td>
                                <td>{{ $shop->longitude }}</td>
                                <td>{{ $shop->tel }}</td>
                                <td>{{ $shop->fax }}</td>
                                <td>{{ $shop->email }}</td>
                                <td>{{ $shop->url }}</td>
                                <td>
                                    <a href="{{ url('admin/shops/edit', $shop->id) }}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a> 
                                    
                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{ url('admin/shops/delete', $shop->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>
        <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
        </script>

        @endsection