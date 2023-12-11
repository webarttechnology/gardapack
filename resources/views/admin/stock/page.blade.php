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

        <div>
            <a href="{{ url('admin/stock/page', 'in-stock') }}"><button class="btn btn-primary radius-30">In Stock </button></a>
            <a href="{{ url('admin/stock/page', 'lowest-in-stock') }}"><button class="btn btn-success radius-30">Lowest in Stock </button></a>
            <a href="{{ url('admin/stock/page', 'out-of-stock') }}"><button class="btn btn-danger radius-30">Out of Stock </button></a>
        </div>
        <br>

        <h6 class="mb-0 text-uppercase">{{ $type }} Products</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>In Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
  
                            @foreach($products as $product)
                            
                            @php
                                $category_name = App\Models\Category::whereId($product->category_id)->first();
                            @endphp
                           
                           @if ($category_name != null)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" 
                                    class="card-img-top" alt="..." height="75" width="100">
                                </td>
                                
                                <td>
                                    @if($product->no_in_stock == null)
                                      0
                                    @else
                                     {{ $product->no_in_stock }}
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="{{url('admin/product/update', $product->id)}}"><button class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a> 
                                    
                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{url('admin/product/delete', $product->id)}}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endif
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>In Stock</th>
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