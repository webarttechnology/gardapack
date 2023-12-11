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

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif

        <div>
            <a href="{{ url('admin/services/add/page') }}"><button class="btn btn-primary radius-30"><i
                        class="bx bx-plus"></i>Add New</button></a>
        </div>
        <br>

        <h6 class="mb-0 text-uppercase">All Services</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($services as $key => $service)
                            @php
                                    $category = App\Models\Category::where('id', $service->category)->first();
                            @endphp

                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('admin/service/'.$service->img) }}" 
                                    class="card-img-top" alt="..." height="75" width="100">
                                </td>
                                <td>
                                    @if ($service->status == "active")
                                        <a class="btn btn-success radius-30">Active</a>
                                    @else
                                        <a class="btn btn-danger radius-30">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/services/update', $service->service_id) }}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a> 
                                    
                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{ url('admin/services/delete', $service->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- -->
        <script src="../../admin/js/data_table.js"></script>

@endsection