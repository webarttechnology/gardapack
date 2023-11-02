@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('product_update'))
        <div class="alert alert-success">
            {{ Session::get('product_update') }}
            @php
            Session::forget('product_update');
            @endphp
        </div>
        @endif



        <div class="row">
            <div class="col-xl-9 mx-auto">

                <div>
                    <a href="{{url('admin/product/gallery/lists', $products->id)}}"><button class="btn btn-success radius-30">
                        <i class="lni lni-gallery"></i>Manage
                            Gallery</button></a>
                </div>
                <br>

                <h6 class="mb-0 text-uppercase">Add Product</h6>
                <hr />

                @php
                $category_name = App\Models\Category::whereId($products->category_id)->first();
                @endphp

                <form action="{{ url('admin/product/update', ['id' => $products->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category *</label>

                                <select name="categories" id="categories" class="select2-field form-control" onchange="subCategoryDetails()">
                                    <option value="{{ $category_name->id }}">{{ $category_name->name }}</option>

                                    @foreach($categories as $category)
                                    @if($category->id != $category_name->id)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('categories'))
                                <span class="text-danger">{{ $errors->first('categories') }}</span>
                                @endif
                            </div>
                            <br>


                            @if($products->sub_category_id != null)
                            @php
                            $sub_category_name = App\Models\Subcategory::whereId($products->sub_category_id)->first();
                            @endphp

                                 <p><b> Sub Category: {{ $sub_category_name->name }}</b></p>
                            @endif


                            <!-- Sub-category section -->
                            
                            <div class="mb-3" style="display: none;" id="sub_cat_div">
                                <label class="form-label">Sub Category</label>
                                <select name="subcategories" id="subcategories"  class="form-control">
                                </select>
                                @if ($errors->has('subcategories'))
                                <span class="text-danger">{{ $errors->first('subcategories') }}</span>
                                @endif
                            </div>
                          
                            <br>
                            <!-- -->

                            <div class="">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ $products->name }}"
                                    required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Short Description</label>
                                <textarea class="ckeditor form-control" name="short_description">
                                    {!! $products->short_description !!}
                                </textarea>
                                @if ($errors->has('short_description'))
                                <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">SKU Code</label>
                                <input type="text" class="form-control" value="{{ $products->sku_code }}"
                                    name="sku_code" />
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Featured Image *</label>
                                <br>
                                <img src="{{ asset('admin/product/featured_img/'.$products->featured_img) }}"
                                    class="card-img-top m-1" alt="..." style="height: 200px; width: 150px">
                                <br>
                                <input type="file" class="form-control" name="featured_img" />
                                @if ($errors->has('featured_img'))
                                <span class="text-danger">{{ $errors->first('featured_img') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Product Price</label>
                                <input type="number" class="form-control" value="{{ $products->price }}"
                                    name="product_price" />
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Product Discount Price</label>
                                <input type="number" class="form-control" value="{{ $products->discount }}"
                                    name="product_discount" />
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Delivary Charge</label>
                                <input type="number" class="form-control" name="delivary_charge"  value="0" />
                            </div>
                            <br>
                            

                            <div class="" id="stock_status_div">
                                <label class="form-label">Product Status</label>

                                <select name="stock_status" id="stock_status" class="form-control" onchange="product_status();">
                                    @if($products->stock_status == "In Stock")
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                    @else
                                    <option value="Out of Stock">Out of Stock</option>
                                    <option value="In Stock">In Stock</option>
                                    @endif
                                </select>
                            </div>
                            <br>


                            <!-- no of products in stock -->
                            <div id="stock_div_1" style="display: block">
                            @if($products->stock_status == "In Stock")
                            <div class="" id="">
                                <label class="form-label">No. of Product in stock</label>
                                <input type="number" class="form-control" name="no_in_stock" value="{{ $products->no_in_stock }}" />
                            </div>
                            @endif
                            </div>
                            <br>

                            <div id="stock_div_2" style="display: none">
                            <div class="" id="">
                                <label class="form-label">No. of Product in stock</label>
                                <input type="number" class="form-control" name="no_in_stock" value="{{ $products->no_in_stock }}" />
                            </div>
                            </div>


                            <!-- Variation code start -->
                            @foreach($variations as $variation)
                            @if($variation->variation != "NA")
                            <div class="row borderBp" id="variations">
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label>Variation</label>
                                        <input type="text" name="ropeChain[]" value="{{ $variation->variation }}"
                                            id="ropeChain" class="form-control"
                                            placeholder="0.68 Mm Thickness 18 Inch" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label>Carat</label>
                                        <input type="number" name="carat[]" id="carat" value="{{ $variation->carat }}"
                                            class="form-control" placeholder="Ex 14k" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label>Size</label>
                                        <input type="number" name="size[]" id="size" value="{{ $variation->size }}"
                                            class="form-control" placeholder="Size" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="num" name="amount[]" id="amount1" value="{{ $variation->amount }}"
                                            class="form-control" placeholder="Amount" onkeyup="getdiscountprice(1)" />
                                        @if ($errors->has('amount'))
                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3 col-12 mt-3">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" name="gold_color[]" id="gold_color"
                                            value="{{ $variation->color }}" class="form-control" placeholder="Color" />
                                        @if ($errors->has('gold_color'))
                                        <span class="text-danger">{{ $errors->first('gold_color') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3 col-12 mt-3">
                                    <div class="form-group">
                                        <label>Discount%</label>
                                        <input type="num" name="discount_percentage[]" id="discount_percentage1"
                                            value="{{ $variation->discount }}" class="form-control"
                                            placeholder="Discount Percentage" onkeyup="getdiscountprice(1)" />
                                        @if ($errors->has('discount_percentage'))
                                        <span class="text-danger">{{ $errors->first('discount_percentage') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3 col-12 mt-3">
                                    <div class="form-group">
                                        <label>Final Price</label>
                                        <input type="num" name="final_price[]" id="final_price1" class="form-control"
                                            placeholder="Final Price" value="{{ $variation->final_price }}" />
                                        <!-- <input type="hidden" name="discount_amt[]" id="discount_amt1" class="form-control" placeholder="Final Price" value="{{ old('discount_amt') }}" />  -->
                                        @if ($errors->has('final_price'))
                                        <span class="text-danger">{{ $errors->first('final_price') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3 col-12 mt-3">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="otherimage[]" id="otherimage" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 rope-chan mt-3">
                                    <p id="line_no"></p>
                                    <span class="btn btn-primary m-b-5 m-t-5" id="addrow" style="float: left;"
                                        onclick="return addRows();"><i class="bx bx-plus" aria-hidden="true"></i></span>
                                        
                                    <a href="{{ url('admin/product/variation/delete', $variation->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"> 
                                    <span class="btn btn-danger m-b-5 m-t-5" id="removerow" 
                                    style="float: right; position: relative; top: -38px; left: 10px;">
                                    <i class="bx bx-trash" aria-hidden="true"></i></span>
                                    </a>

                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- variations code ends -->


                            <div class="row">
                                <div style="padding:10px;" id="more_variations"></div>
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="description">
                                    {!! $products->description !!}
                                </textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Video</label>
                                <br>
                                @if($products->video != null)
                                <iframe width="350" height="245"
                                    src="{{asset('admin/product/video/'.$products->video)}}"></iframe>
                                @endif
                                <br>
                                <input type="file" class="form-control" name="video" />
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            <br>




                            <div class="">
                                <label class="form-label">Link</label>
                                <input type="text" class="form-control" name="website_link" value="{{ $products->website_link }}" />
                                @if ($errors->has('website_link'))
                                <span class="text-danger">{{ $errors->first('website_link') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            
                            
                            <!-- tags -->
                            <div class="">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control" name="tags"  value="{{ $products->tags }}"/>
                                @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            
                             <!-- new coliumns -->
                            <div class="">
                                <label class="form-label">Weight (kg)</label>
                                <input type="text" class="form-control" name="weight" value="{{ $products->weight }}" />
                                @if ($errors->has('weight'))
                                <span class="text-danger">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Length (cm)</label>
                                <input type="text" class="form-control" name="length" value="{{ $products->length }}" />
                                @if ($errors->has('length'))
                                <span class="text-danger">{{ $errors->first('length') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Width (cm)</label>
                                <input type="text" class="form-control" name="width" value="{{ $products->width }}" />
                                @if ($errors->has('width'))
                                <span class="text-danger">{{ $errors->first('width') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Height (cm)</label>
                                <input type="text" class="form-control" name="height" value="{{ $products->height }}" />
                                @if ($errors->has('height'))
                                <span class="text-danger">{{ $errors->first('height') }}</span>
                                @endif
                            </div>
                            <br>
                            <!-- -->
                            

                            <div class="">
                                <label class="form-label">Status</label>
                        
                                <select class="form-control" name="status">
                                    @if ($products->status == "active")
                                     <option value="active">Active</option>
                                     <option value="inactive">Inactive</option>
                                    @else
                                     <option value="inactive">Inactive</option>
                                     <option value="active">Active</option> 
                                    @endif
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <br>


                            @php
                                $rate = App\Models\Rating::where('product_id', $products->id)->where('type', 'product')->get();
                                
                                if($rate->isEmpty() == false){
                                     $total_no_of_rating = count($rate);

                                     $total_rate = 0;
                                     for($i=0; $i<$total_no_of_rating; $i++){
                                          $total_rate = $total_rate + ($rate[$i]->rate);
                                     }

                                     /*
                                         Avg. Rating
                                     */

                                     $rating = number_format((float)($total_rate/$total_no_of_rating),  2, '.', '');
                                }
                                else{
                                    $total_no_of_rating = 0;
                                    $rating = 0;
                                }
                            @endphp

                            <div class="" id="">
                                <label class="form-label">Rating</label>
                                <p><b> {{ $rating }} Out of 5.00 ( {{ $total_no_of_rating }} Reviews ) </b></p>
                                {{-- <input type="number" class="form-control" name="rating" value="{{ $products->rating }}"  /> --}}
                            </div>
                            <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Save" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>

<!-- Add duplicate variations -->
<script src="../../js/product_update.js"></script>
@endsection