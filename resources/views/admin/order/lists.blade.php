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

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif

        <h6 class="mb-0 text-uppercase">Orders</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Id</th>
                                <th>Billing Name</th>
                                <th>Payment Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($orders as $key => $order)
                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->billing_name }}</td>
                                <td>
                                    @if($order->status == "0")
                                        <button type="button" class="btn btn-danger btn-sm">Not Paid</button>
                                    @else
                                        <button type="button" class="btn btn-success btn-sm">Paid</button>
                                    @endif
                                </td>
                                <td>
                                    {{ $order->created_at->format('d-m-Y') }}
                                </td>
                                <td>
                                    <a href="{{ url('admin/order/view/details', $order->order_id) }}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>View</button></a> 
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Order Id</th>
                                <th>Billing Name</th>
                                <th>Payment Status</th>
                                <th>Date</th>
                                <th>Action</th>
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