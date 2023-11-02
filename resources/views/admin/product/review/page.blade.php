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

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        <br>

        <h6 class="mb-0 text-uppercase">Products Reviews</h6>
        <hr />


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>User Name</th>
                                <th>Rateing</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($reviews as $review)
                            @php
                                $product = App\Models\Product::where('id', $review->product_id)->first();
                                $user = App\Models\User::where('id', $review->user_id)->first();
                            @endphp

                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $review->rate }}
                                </td>
                                <td>
                                    {!! $review->comment !!}
                                </td>
                                <td>
                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    <a href="{{ route('product/reviews/delete', $review->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif
                                    
                                </td>
                            </tr>
                            
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>User Name</th>
                                <th>Rateing</th>
                                <th>Comment</th>
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