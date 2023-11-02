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
@endphp

<div class="page-wrapper">
    <div class="page-content">
<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
    <div class="col" onclick="window.location.href = './admin-lists'">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Admins</p>
                        <h4 class="my-1">{{ $total_admin }}</h4>
                    </div>
                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-group'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col" onclick="window.location.href = './user-lists'">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total User</p>
                        <h4 class="my-1">{{ $total_user }}</h4>
                    </div>
                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-user-circle'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12" onclick="window.location.href = './product/lists'">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Products</p>
                        <h4 class="my-1">{{ $product_c }}</h4>
                    </div>
                    <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-category-alt'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Orders</p>
                        <h4 class="my-1">0</h4>
                    </div>
                    <div class="widgets-icons bg-light-primary text-primary ms-auto"><i class='bx bxs-cart-alt'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


<footer class="page-footer">
    <p class="mb-0">Copyright © 2023. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->

@endsection