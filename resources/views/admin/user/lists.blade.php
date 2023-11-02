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

        @if(Session::has('page_delete'))
        <div class="alert alert-success">
            {{ Session::get('page_delete') }}
            @php
            Session::forget('page_delete');
            @endphp
        </div>
        @endif

        <div>
            <a href="{{url('admin/save/users', ['page' => 'add', 'id' => '0'])}}"><button class="btn btn-primary radius-30"><i class="bx bx-plus"></i>Add New</button></a>
        </div>
        <br>

        <h6 class="mb-0 text-uppercase">User Table</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a
                                        href="{{url('admin/save/users', ['page' => 'update', 'id' => $user->id])}}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a>

                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{url('admin/user/delete', $user->id)}}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
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