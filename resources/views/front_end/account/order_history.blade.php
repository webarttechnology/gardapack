<x-userHeader />

@include('front_end.commons.session-msg')
<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}} );">
        <div class="container">
            
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Order</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="mr-2"><a href="#">My Account</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Order History</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard">
                        <div class="user-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="h-user">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                        <div class="d-board">
                            <ul>
                                <li><a href="{{ url('my-account') }}"><i class="bi bi-pencil-square"></i>Edit Profile</a></li>
                                <li><a href="{{ url('change-password') }}"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Change
                                        Password</a>
                                <li><a href="{{ url('order-history') }}"><i class="bi bi-bag-check-fill"></i>Order History</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


               
                <div class="col-md-8">
                    <div class="orderTab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cancel Order</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <!-- order -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @foreach ($orders as $order)
                                <div class="order-tab">
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="order">
                                                <h4>Order Id - {{ $order->order_id }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cncl">
                                                @if ($order->order_status == "active")
                                                   <button class="btn btn-success">Active</button>
                                                   <a href="{{ url('cancel-order', $order->order_id) }}"><button class="btn btn-danger">Cancel Order</button></a>
                                                @else
                                                  <button class="btn btn-danger">Canceled</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
            
                                    @php
                                        $products = App\Models\OrderedProduct::where('order_id', $order->order_id)->get();    
                                    @endphp
            
                                  
                                     @if (count($products) > 0)
                                     @if($order->order_status == "active")
                                     
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach($products as $key => $product)
                                                      @php
                                                          $details = App\Models\Product::where('id', $product->product_id)->first();
                                                      @endphp
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $details->name }}</td>
                                                            <td>{{ $product->product_quantity }}</td>
                                                            <td>{{ ($product->product_quantity * $product->product_price) }}</td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @endif
                                    @else
                                    <div class="row">
                                        <div class="col-md-12">
                                             <p><strong>No Products Found</strong></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
            
                                <div class="m-2">
                                  {{ $orders->links() }}
                                </div>
                            </div>

                            <!-- cancel order -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                @foreach ($cancel_orders as $order)
                                <div class="order-tab">
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="order">
                                                <h4>Order Id - {{ $order->order_id }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cncl">
                                                @if ($order->order_status == "active")
                                                   <button class="btn btn-success">Active</button>
                                                   <a href="{{ url('cancel-order', $order->order_id) }}"><button class="btn btn-danger">Cancel Order</button></a>
                                                @else
                                                  <button class="btn btn-danger">Canceled</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
            
                                   
                                    
                                </div>
                                @endforeach
            
                                <div class="m-2">
                                  {{ $cancel_orders->links() }}
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            
            </div>
        </div>
        </div>
        </div>
    </section>

</main>

<x-userFooter />