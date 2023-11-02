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

        @if(Session::has('page_success'))
        <div class="alert alert-success">
            {{ Session::get('page_success') }}
            @php
            Session::forget('page_success');
            @endphp
        </div>
        @endif

        
        @if(Session::has('admin_delete'))
        <div class="alert alert-success">
            {{ Session::get('admin_delete') }}
            @php
            Session::forget('admin_delete');
            @endphp
        </div>
        @endif

        
        <br>

        <h6 class="mb-0 text-uppercase">Settings Table</h6>
        <hr />

        @if($details == "")
        <div>
            <p>You Don't have Existing <b>{{ ucfirst(str_replace("_", " ", $key)) }}</b> </p>
            <a href="{{ url('admin/settings/add/page', $key) }}"><button class="btn btn-primary radius-30"><i class="bx bx-plus"></i>Add New</button></a>
        </div>

        @else
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ ucfirst(str_replace("_", " ", $details->key)) }}</td>
                                <td>
                                    @if($details->input_type == "Text")
                                    {{ $details->value }}
                                    @else
                                      <img src="{{asset('settings/'.$key.'/'.$details->value)}}" height="150" width="200" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/settings/update/page', $details->id) }}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @endif

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