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

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        <div>
            @if (Auth::guard('admin')->user()->type == "admin")
            <a href="{{ url('admin/shipping/add/page') }}"><button class="btn btn-sm btn-primary radius-30"><i
                class="bx bx-plus"></i>Add New</button></a>
            @endif
            
        </div>
        <br>

        <h6 class="mb-0 text-uppercase">Shipping Options</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($menubars as $key => $menubar)
                            <tr>
                                <td> {{ ( $key + 1 ) }}</td>
                                <td> {{ $menubar->title }}</td>
                                <td> 
                                      {{ $menubar->price }}
                                </td>
                                <td>
                                    @if($menubar->status == "active")
                                      <span class="badge bg-success">{{ ucfirst($menubar->status) }}</span>
                                    @else
                                      <span class="badge bg-danger">{{ ucfirst($menubar->status) }}</span>
                                    @endif 
                                </td>
                                <td>
                                    <a href="{{ url('admin/shipping/update/page', $menubar->id) }}"><button class="btn btn-success radius-30 btn-sm"><i class="lni lni-arrow-right"></i>Update</button></a> 
                                    
                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{ url('admin/shipping/delete', $menubar->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30 btn-sm"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
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