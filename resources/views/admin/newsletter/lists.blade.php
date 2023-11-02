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

        <h6 class="mb-0 text-uppercase">All Newsletters</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Emails</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($lists as $key => $list)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $list->email }}</td>
                                <td>{{ $list->created_at->format('d/m/Y') }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Emails</th>
                                <th>Date</th>
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