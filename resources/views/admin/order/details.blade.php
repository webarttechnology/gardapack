@extends('admin.commons.dashboard_header')
@section('content')

@php
    $carriers = json_decode(App\Http\Controllers\Order\ShipStationManageController::getCarriers(), true);
@endphp

@php
   $shipment_detail = App\Models\ShippingOption::whereId($order->shipping_option)->first(); 
@endphp

<div class="page-wrapper">
    <div class="page-content">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        <div>
            <h4>Basic Details</h4>
        </div>

        <div class="card mt-3 p-2" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Order Id: </strong> {{ $order->order_id }}</li>
              <li class="list-group-item"><strong>Name: </strong> {{ $order->billing_name }}</li>
              <li class="list-group-item"><strong>Email: </strong> {{ $order->billing_email }}</li>
              <li class="list-group-item"><strong>Phone: </strong> {{ $order->billing_phone }}</li>
              <li class="list-group-item"><strong>Billing Address: </strong> {{ $order->billing_address1 }} <br> 
                {{ $order->billing_address2 }}, <br> Country - {{ $order->billing_country }}, Town/City - {{ $order->billing_town }}, State - {{ $order->billing_state }}
                <br> Zip - {{ $order->billing_zip }}
              </li>
              <li class="list-group-item"><strong>Shipping Address: </strong> {{ $order->shipping_address1 }} <br> 
                {{ $order->shipping_address2 }}, <br> Country - {{ $order->shipping_country }}, Town/City - {{ $order->shipping_town }}, State - {{ $order->shipping_state }}
                <br> Zip - {{ $order->shipping_zip }}
              </li>
              
                  <li class="list-group-item">
                    @if ($order->order_notes != null)
                    <strong>Order Notes: {{ $order->order_notes }}</strong>
                    @endif
                </li>
              
                <h5 class="mt-3">Shipment Details</h5>
                <li class="list-group-item"><strong>Shipment Option: </strong> {{ $shipment_detail->title }}</li>
                <li class="list-group-item"><strong>Shipment Price: </strong> ${{ $order->shipping_cost }}</li>


                @if($order->carrier != null)    
                    <li class="list-group-item"><strong>Carrier: </strong> {{ $order->carrier }}</li>
                    <li class="list-group-item"><strong>Service Code: </strong> {{ $order->service_code }}</li>
                @endif
            </ul>
        </div>

        @if($order->carrier == "null")
        @if($order->ship_station_order_id != null)    
        <form action="{{ url('admin/save/shipment/order') }}" method="post" >
            @csrf

            <div class="col-md-12 mb-3">
                <label for="zip">Choose a Carrier: *</label>
    
                <select name="carrier" id="carrier" class="form-control"
                    onchange="getServiceDetails()">
                    <option value="">Select A Carrier</option>
                    @if($carriers != null)
                    @foreach ($carriers as $carrier)
                        <option value="{{ $carrier['code'] }}">{{ $carrier['name'] }}</option>
                    @endforeach
                    @endif
                </select>
    
                @if ($errors->has('carrier'))
                    <span class="text-danger">{{ $errors->first('carrier') }}</span>
                @endif
            </div>

            <div class="col-md-12 mb-3" id="service_main">
                <label for="service">Choose a Service: </label>
                <select name="service" id="service" class="form-control" onchange="getServiceRate();">
                    <option value="">Select A Service</option>
                </select>

                @if ($errors->has('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                @endif
            </div>

            <input type="hidden" value="{{ $order->id }}" name="order_id">
            <div class="mb-5">
                <button class="cstmbtn btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        @endif
        @endif


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
                            @if($product != null)
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
                            @endif
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

    <script>
        function getServiceDetails() {
        let carrier = $('#carrier').val();

        $('#service_main').hide();

        if (carrier != "") {
            $.ajax({
                type: "GET",
                url: '{{ url('user/product/order/getShipServices/') }}' + '/' + carrier,
                success: function(response) {

                    $('#service_main').show();
                    let services = response.services;

                    // Add new options based on the services
                    if (services.length > 0) {
                        // Clear existing options
                        $('#service').empty();

                        $('#service').append('<option value="">Select A Service</option>');
                        services.forEach(function(service) {
                            $('#service').append('<option value="' + service.code + '">' + service
                                .name + '</option>');
                        });
                    }

                }
            });

        } else {
            $('#service_main').hide();
            alert("Please Select a Carrier");
        }
    }
    </script>
@endsection