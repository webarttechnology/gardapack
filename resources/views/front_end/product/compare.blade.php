<x-userHeader />

@if($prodCount > 0)
<section class="prdctcmpsect py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="brdrls">
                            <th></th>
                            @foreach($productsCompares as $productsCompare)
                             <th scope="col"><a href="{{ route('product.compare.delete', $productsCompare->id) }}"><i class="fa fa-times" aria-hidden="true"></i></a></th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>Product</th>
                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::where('id', $productCompare->prod_id)->first();
                                @endphp

                                <td>
                                    <div class="prdctim">
                                        <img src="{{ asset('admin/product/featured_img/' . $product->featured_img) }}"
                                            alt="">
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Price</th>

                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::where('id', $productCompare->prod_id)->first();
                                @endphp
                                <td>${{ $product->price }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Availability</th>
                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::where('id', $productCompare->prod_id)->first();
                                @endphp
                                <td>{{ $product->no_in_stock > 0 ? 'In Stock' : 'Out of Stock' }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Description</th>
                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::where('id', $productCompare->prod_id)->first();
                                @endphp
                                <td>
                                    <div class="dest">
                                        <ul>
                                            <li><i class="bi bi-check2"></i> {!! $product->short_description !!}</li>
                                        </ul>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Ratings & Reviews</th>
                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::where('id', $productCompare->prod_id)->first();
                                    $prodRating = App\Models\Rating::where('product_id', $product->id)->get();
                                    $totalRating = count($prodRating);
                                    $ratingSum = App\Models\Rating::where('product_id', $product->id)->sum('rate');

                                    if ($totalRating != 0) {
                                        $avgRating = number_format($ratingSum / $totalRating, 0);
                                    } else {
                                        $avgRating = 0;
                                    }
                                @endphp
                                <td>
                                    <div class="stars">
                                        <ul>
                                            <li @if ($avgRating < 1) class="active" @endif><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li @if ($avgRating < 2) class="active" @endif><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li @if ($avgRating < 3) class="active" @endif><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li @if ($avgRating < 4) class="active" @endif><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li @if ($avgRating < 5) class="active" @endif><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><span>({{ $totalRating }} Reviews)</span> </li>
                                        </ul>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Category</th>
                            @foreach ($productsCompares as $productCompare)
                                @php
                                    $product = App\Models\Product::with('category')
                                        ->where('id', $productCompare->prod_id)
                                        ->first();
                                @endphp
                                <td>{{ $product->category->name }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@else
<section class="prdctcmpsect py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<h3 class="text-center">No Product Found</h3>
            </div>
        </div>
    </div>
</section>
@endif
<x-userFooter />