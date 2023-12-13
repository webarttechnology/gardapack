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

        <h6 class="mb-0 text-uppercase">Wholesale Table</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Company Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($lists as $list)
                            <tr>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->email }}</td>
                                <td>{{ $list->info->phone }}</td>
                                <td>{{ $list->info->address_line1 }}</td>
                                <td>{{ $list->info->company_name }}</td>
                                <td>
                                    @if($list->is_accept == '')
                                        <label class="badge bg-primary">Pending</label>
                                    @elseif($list->is_accept == 'accept')
                                        <label class="badge bg-success">Accept</label>
                                    @else
                                        <label class="badge bg-danger">Reject</label>
                                    @endif
                                </td>
                                <td>
                                    @if($list->is_accept == '')
                                    <a href="{{ url('admin/wholesaler/status', ['id' => $list->id, 'status' => 'accept']) }}"  onclick="return confirm('Are You Sure, You want to Accept this Wholseller?')" class="btn btn-primary btn-sm">Accept</a>
                                    <a href="{{ url('admin/wholesaler/status', ['id' => $list->id, 'status' => 'reject']) }}" onclick="return confirm('Are You Sure, You want to Reject this Wholseller?')" class="btn btn-danger btn-sm">Reject</a>
                                    @else
                                    NA
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Company Name</th>
                                <th>Status</th>
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