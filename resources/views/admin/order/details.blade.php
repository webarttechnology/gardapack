@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <div>
            <h4>Basic Details</h4>
        </div>

        <div class="card mt-3 p-2" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Order Id: </strong> {{ $order->order_id }}</li>
              <li class="list-group-item"><strong>Name: </strong> {{ $order->billing_name }}</li>
              <li class="list-group-item"><strong>Email: </strong> {{ $order->billing_email }}</li>
              <li class="list-group-item"><strong>Phone: </strong> {{ $order->billing_phone }}</li>
              <li class="list-group-item"><strong>Delivary Address: </strong> {{ $order->billing_address1 }} <br> 
                {{ $order->billing_address2 }}, <br> Country - {{ $order->billing_country }}, Town/City - {{ $order->billing_town }}, State - {{ $order->billing_state }}
                <br> Zip - {{ $order->billing_zip }}
              </li>
              @if ($order->order_notes != null)
                  <li><strong>Order Notes: {{ $order->order_notes }}</strong></li>
              @endif
            </ul>
        </div>

        <div>
            <h4>Product Details</h4>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Img</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($order_products as $key => $order)
                            @php
                                $product = App\Models\Product::whereId($order->product_id)->first();
                            @endphp
                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $order->product_quantity }}</td>
                                <td>{{ ($order->product_quantity * $order->product_price) }}</td>
                                <td>
                                    <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" 
                                    class="card-img-top" alt="..." height="75" width="90">
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Img</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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