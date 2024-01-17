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

        @if(Session::has('product_delete'))
        <div class="alert alert-success">
            {{ Session::get('product_delete') }}
            @php
            Session::forget('product_delete');
            @endphp
        </div>
        @endif

        
        <br>

        <h6 class="mb-0 text-uppercase">All Product Requests</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Model No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Purchase From</th>
                                <th>Purchase Date</th>
                                <th>Delivery Date</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $key => $product)

                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td>{{ $product->product_model_no }}</td>
                                <td>{{ $product->first_name }} {{ $product->last_name }}</td>
                                <td>
                                    {{ $product->email }}
                                </td>
                                <td>
                                    {{ $product->phone_no }}
                                </td>
                                <td>
                                    {{ $product->purchased_from }}
                                </td>
                                <td>
                                    {{ $product->date_of_purchase }}
                                </td>
                                <td>
                                    {{ $product->delivery_date }}
                                </td>
                                
                                {{-- <td>
                                    <a href="{{route('product/reviews', $product->id)}}"><button
                                            class="btn btn-primary radius-30">Reviews</button></a>
                                </td> --}}


                                {{-- <td>
                                    <a href="{{url('admin/product/update', $product->id)}}"><button
                                            class="btn btn-success radius-30"><i
                                                class="lni lni-arrow-right"></i>Update</button></a>

                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{url('admin/product/delete', $product->id)}}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button
                                            class="btn btn-danger radius-30"><i
                                                class="bx bx-trash"></i>Delete</button></a>
                                    @endif

                                </td> --}}
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Model No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Purchase From</th>
                                <th>Purchase Date</th>
                                <th>Delivery Date</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- -->

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