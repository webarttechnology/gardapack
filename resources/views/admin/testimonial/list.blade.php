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

            @if (Session::has('delete'))
                <div class="alert alert-danger">
                    {{ Session::get('delete') }}
                    @php
                        Session::forget('delete');
                    @endphp
                </div>
            @endif

            <div>
                @if (Auth::guard('admin')->user()->type == 'admin')
                    <a href="{{ url('admin/testimonial/add/page') }}"><button class="btn btn-primary radius-30"><i
                                class="bx bx-plus"></i>Add New</button></a>
                @endif

            </div>
            <br>

            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Testimonial Heading</h6>
                    <hr />
    
                    <form action="{{ url('admin/testimonial/heading/save/action') }}" method="post" enctype= "multipart/form-data">
                        @csrf
    
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" name="testimonial_heading" value="@if($home != null) {{ $home->testimonial_heading }} @endif" required>
                                    @if ($errors->has('testimonial_heading'))
                                    <span class="text-danger">{{ $errors->first('testimonial_heading') }}</span>
                                    @endif
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

            <h6 class="mb-0 text-uppercase">Testimonials</h6>
            <hr />


            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($faqs as $key => $faq)
                                    <tr>
                                        <td> {{ $key + 1 }}</td>
                                        <td> {{ $faq->name }}</td>
                                        <td> {!! $faq->message !!}</td>
                                        <td>
                                            <a href="{{ url('admin/testimonial/update/page', $faq->id) }}"><button
                                                    class="btn btn-success radius-30"><i
                                                        class="lni lni-arrow-right"></i>Update</button></a>

                                            @if (Auth::guard('admin')->user()->type == 'admin')
                                                |
                                                <a href="{{ url('admin/testimonial/delete', $faq->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this item?');"><button
                                                        class="btn btn-danger radius-30"><i
                                                            class="bx bx-trash"></i>Delete</button></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Message</th>
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
