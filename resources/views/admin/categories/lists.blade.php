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

        @if(Session::has('category_delete'))
        <div class="alert alert-success">
            {{ Session::get('category_delete') }}
            @php
            Session::forget('category_delete');
            @endphp
        </div>
        @endif

        <div>
            <a href="{{ url('admin/add/category/page', $type) }}"><button
                    class="btn btn-primary radius-30"><i class="bx bx-plus"></i>Add New</button></a>
        </div>
        <br>

        <h6 class="mb-0 text-uppercase">Category Table</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                {{-- <th>Sub Categories</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($categories as $categorie)
                            <tr>
                                <td>{{ $categorie->name }}</td>
                                <td>
                                    @if($categorie->category_img != null)
                                      <img src="{{ asset('category_img/'.$categorie->category_img) }}" height="100" width="175"  alt="">
                                    @else
                                       <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                    @endif
                                </td>
                                {{-- <td>
                                    @php
                                         $sub_cat_count = count(App\Models\Subcategory::where('category_id', $categorie->id)->get());
                                    @endphp

                                    @if ($sub_cat_count > 0)
                                        <a href="{{ url('admin/sub-categories/page', $categorie->id) }}" class="btn btn-dark radius-30">Manage</a>                                        
                                    @else
                                        <a href="{{ url('admin/sub-categories/add/page', $categorie->id) }}" class="btn btn-primary radius-30">Add</a>
                                    @endif
                                </td> --}}
                                <td>
                                    <a href="{{url('admin/update/category/page', ['id' => $categorie->id, 'type' => $type])}}"><button
                                            class="btn btn-success radius-30"><i class="lni lni-arrow-right"></i>Update</button></a>

                                    @if(Auth::guard('admin')->user()->type == "admin")
                                    |
                                    <a href="{{ url('admin/category/delete', $categorie->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><button
                                            class="btn btn-danger radius-30"><i class="bx bx-trash"></i>Delete</button></a>
                                    @endif

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
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