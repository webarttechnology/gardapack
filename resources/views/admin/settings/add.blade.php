@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('page_success'))
        <div class="alert alert-success">
            {{ Session::get('page_success') }}
            @php
            Session::forget('page_success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Page</h6>
                <hr />


                <form action="{{ url('admin/settings/post/add/page', $key) }}" method="post" enctype= "multipart/form-data">
                    @csrf


                    @if ($errors->has('text_value'))
                            <span class="text-danger">{{ $errors->first('text_value') }}</span>
                    @endif

                    @if ($errors->has('file_value'))
                            <span class="text-danger">{{ $errors->first('file_value') }}</span>
                    @endif


                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Type</label>
                                <!-- <input type="text" class="form-control datepicker" name="name" required /> -->
                                
                                <select name="type" class="form-control" id="input_type" onchange="return changeType()">
                                    <option value="Select A Input Type">Select A Input Type</option>
                                    <option value="Text">Text</option>
                                    <option value="File">File</option>
                                </select>

                            </div>
                            <br>

                            <div class="" style="display:none" id="text_type">
                                <label class="form-label">Text</label>
                                <input type="text" class="form-control" name="text_value" />
                                
                            </div>
                            <br>

                            <div class="" style="display:none" id="file_type">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="file_value" />
                                
                            </div>
                            <br>


                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Add" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>


<script>
    function changeType(){
           var input_type = document.getElementById("input_type").value;

           if(input_type == "Text"){
                document.getElementById("text_type").style.display = "block";
                document.getElementById("file_type").style.display = "none";
           }
           else if(input_type == "File"){
                document.getElementById("file_type").style.display = "block";
                document.getElementById("text_type").style.display = "none";
           }
           else{
                document.getElementById("file_type").style.display = "none";
                document.getElementById("text_type").style.display = "none";
           }
        //    alert(input_type);
    }
</script>
@endsection