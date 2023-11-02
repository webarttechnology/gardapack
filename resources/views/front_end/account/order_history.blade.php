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





    @php
    $address = App\Models\Pages::where('name', 'Contact Us Page')->first();
    $phones = explode(',', $address->phone);
    $emails = explode(',', $address->email);
@endphp

<aside class="footerHolder container-fluid bg-lightGray overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
    <div class="d-flex flex-wrap flex-lg-nowrap">
        <div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
            <h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
            <ul class="list-unstyled footerContactList mb-3">
                <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">{{ $address->address }}</address></li>
                <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : 
                    @foreach ($phones as $phone)
                    <a href="tel:{{ $phone }}">{{ $phone }}</a><br>
                    @endforeach

                </span></li>
                <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email : 
                    @foreach ($emails as $email)
                        <a href="mailto:{{ $email }}">{{ $email }}</a><br>								
                    @endforeach

                </span></li>
            </ul>
            <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                <li class="fwEbold mr-xl-11 mr-sm-6 mr-4">Follow  us:</li>
                <li class="mr-xl-6 mr-sm-4 mr-2"><a href="https://www.facebook.com/greenmall" target="_blank" class="fab fa-facebook-f"></a></li>
                <li class="mr-xl-6 mr-sm-4 mr-2"><a href="https://www.youtube.com/c/LiveGreenMall" target="_blank" class="fab fa-youtube"></a></li>
                {{-- <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
                <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li> --}}
            </ul>
        </div>

        
        <div class="coll-2 mb-sm-4 mb-3 mb-lg-0">
            <h3 class="headingVI fwEbold text-uppercase mb-6">Quick Link</h3>
            <ul class="list-unstyled footerNavList">
                <li class="mb-1"><a href="{{ url('/') }}">Home</a></li>
                <li class="mb-1"><a href="{{ url('gallery') }}">Gallery</a></li>
                <li class="mb-2"><a href="{{ url('about-us') }}">About</a></li>
                <li class="mb-2"><a href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
        </div>
        
        
        @if (Auth::user())
        <div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
            <h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
            <ul class="list-unstyled footerNavList">
                <li class="mb-1"><a href="javascript:void(0);">My account</a></li>
                <li class="mb-2"><a href="javascript:void(0);">My Order</a></li>
            </ul>
        </div>
        @else
        <div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
            <h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
            <ul class="list-unstyled footerNavList">
                <li class="mb-1"><a href="{{ url('signup') }}">Signin</a></li>
            </ul>
        </div>
        @endif

        @php
            $category_lists = App\Models\Category::where('type', 'product')->inRandomOrder()->limit(6)->get();
        @endphp

        <div class="coll-4 mb-sm-4 mb-3 mb-lg-0">
            <h3 class="headingVI fwEbold text-uppercase mb-7 pl-xl-14 pl-lg-10">Category</h3>
            <ul class="list-unstyled tagNavList d-flex flex-wrap justify-content-lg-end mb-0">
                @foreach ($category_lists as $category_list)
                   <li class="text-center mb-2"><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category_list->slug]) }}" class="md-round d-block py-2 px-2">{{ $category_list->name }}</a></li>
                @endforeach
            </ul>
        </div>

        
    </div>
</aside>


</main>

<x-userFooter />