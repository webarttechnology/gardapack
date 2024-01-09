@extends('admin.commons.dashboard_header')
@section('content')



<div class="page-wrapper">
    <div class="page-content">

        <div>
            <h4>Basic Details</h4>
        </div>

        <div class="card mt-3 p-2" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Name: </strong> {{ $wholesale->user->name }}</li>
              <li class="list-group-item"><strong>Email: </strong> {{ $wholesale->user->email }}</li>
              <li class="list-group-item"><strong>Phone: </strong> {{ $wholesale->user->phone }}</li>
              <li class="list-group-item"><strong>Comapny Name: </strong> {{ $wholesale->company_name }}</li>
              <li class="list-group-item"><strong>Reseller Id: </strong> {{ $wholesale->resellerId }}</li>
              <li class="list-group-item"><strong>Reseller Id Upload: </strong><br> <img src="{{ asset('uploads/wholesaler/' . $wholesale->resellerFile) }}" width="150" alt=""></li>
              <li class="list-group-item"><strong>Address: </strong> {{ $wholesale->address_line1 }}</li>
              <li class="list-group-item"><strong>Address 2: </strong> {{ $wholesale->address_line2 }}</li>
              <li class="list-group-item"><strong>City: </strong> {{ $wholesale->city }}</li>
              <li class="list-group-item"><strong>State: </strong> {{ $wholesale->state }}</li>
              <li class="list-group-item"><strong>Zip: </strong> {{ $wholesale->zip }}</li>
              <li class="list-group-item"><strong>Country: </strong> {{ $wholesale->country }}</li>
            </ul>
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