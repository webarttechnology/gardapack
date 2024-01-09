@extends('admin.commons.dashboard_header')
@section('content')
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    @php
        $product_c = App\Models\Product::countProduct(Auth::guard('admin')->user()->type);
        $total_user = App\Models\User::countUser();
        $total_admin = App\Models\Admin::countAdmin(Auth::guard('admin')->user()->type);
        $orders = App\Models\Order::orderBy('id', 'desc')->get();
    @endphp

    <div class="page-wrapper">
        <div class="page-content">


            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <!--<div class="col" onclick="window.location.href = './admin-lists'">-->
                <!--    <div class="card radius-10">-->
                <!--        <div class="card-body">-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <div>-->
                <!--                    <p class="mb-0 text-secondary">Total Admins</p>-->
                <!--                    <h4 class="my-1">{{ $total_admin }}</h4>-->
                <!--                </div>-->
                <!--                <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-group'></i>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col" onclick="window.location.href = './user-lists'" style="cursor: pointer;">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Customers</p>
                                    <h4 class="my-1">{{ $total_user }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i
                                        class='bx bxs-user-circle'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" onclick="window.location.href = './product/lists'" style="cursor: pointer;">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Products</p>
                                    <h4 class="my-1">{{ $product_c }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                        class='bx bxs-category-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" onclick="window.location.href = './order/list'" style="cursor: pointer;">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Orders</p>
                                    <h4 class="my-1">{{ count($orders) }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-primary text-primary ms-auto"><i
                                        class='bx bxs-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Orders</h4>
                </div>
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

                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ $order->billing_name }}</td>
                                        <td>
                                            @if ($order->status == '0')
                                                <button type="button" class="btn btn-danger btn-sm">Not Paid</button>
                                            @else
                                                <button type="button" class="btn btn-success btn-sm">Paid</button>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $order->created_at->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/order/view/details', $order->order_id) }}"><button
                                                    class="btn btn-success radius-30"><i
                                                        class="lni lni-arrow-right"></i>View</button></a>
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


    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
    </div>
    <!--end wrapper-->
@endsection
