@extends('admin.commons.dashboard_header')
@section('content')

<style>
   .save-button-container {
        position: fixed;
        bottom: 50%;
        right: 20px;
        top: 50%;
        z-index: 1000;
    }

    #manage_con {
        position: fixed;
        bottom: 40%;
        right: 20px;
        top: 40%;
        z-index: 1000;
    }
</style>

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
         @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Website Footer</h6>
                <hr/>

                <form action="{{ url('admin/website/footer/store') }}" id="form1" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">

                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="footer_desc">@if($footer != null) {{ $footer->footer_desc }} @endif</textarea>
                                @if ($errors->has('footer_desc'))
                                <span class="text-danger">{{ $errors->first('footer_desc') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" name="fb_link" value="@if($footer != null) {{ $footer->fb_link }} @endif">
                                @if ($errors->has('fb_link'))
                                <span class="text-danger">{{ $errors->first('fb_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Facebook Image</label>
                                <br>
                                @if($footer != null && $footer->fb_image != null)
                                    <img src="{{ asset('uploads/social/'.$footer->fb_image) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="fb_image">
                                @if ($errors->has('fb_image'))
                                <span class="text-danger">{{ $errors->first('fb_image') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Facebook Link Status</label>
                                <select class="form-control" name="fb_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->fb_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->fb_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('fb_status'))
                                <span class="text-danger">{{ $errors->first('fb_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link" value="@if($footer != null) {{ $footer->twitter_link }} @endif">
                                @if ($errors->has('twitter_link'))
                                <span class="text-danger">{{ $errors->first('twitter_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Twitter Image</label>
                                <br>
                                @if($footer != null && $footer->twitter_image != null)
                                    <img src="{{ asset('uploads/social/'.$footer->twitter_image) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="twitter_image">
                                @if ($errors->has('twitter_image'))
                                <span class="text-danger">{{ $errors->first('twitter_image') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Twitter Link Status</label>
                                <select class="form-control" name="twitter_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->twitter_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->twitter_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('twitter_status'))
                                <span class="text-danger">{{ $errors->first('twitter_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="goog_link" value="@if($footer != null) {{ $footer->goog_link }} @endif">
                                @if ($errors->has('goog_link'))
                                <span class="text-danger">{{ $errors->first('goog_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Instagram Image</label>
                                <br>
                                @if($footer != null && $footer->goog_image != null)
                                    <img src="{{ asset('uploads/social/'.$footer->goog_image) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="goog_image">
                                @if ($errors->has('goog_image'))
                                <span class="text-danger">{{ $errors->first('goog_image') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Instagram Status</label>
                                <select class="form-control" name="goog_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->goog_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->goog_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('goog_status'))
                                <span class="text-danger">{{ $errors->first('goog_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Tiktok</label>
                                <input type="text" class="form-control" name="pint_link" value="@if($footer != null) {{ $footer->pint_link }} @endif">
                                @if ($errors->has('pint_link'))
                                <span class="text-danger">{{ $errors->first('pint_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Tiktok Image</label>
                                <br>
                                @if( !empty($footer->pint_image) )
                                    <img src="{{ asset('uploads/social/'.$footer->pint_image) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="pint_image">
                                @if ($errors->has('pint_image'))
                                <span class="text-danger">{{ $errors->first('pint_image') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Tiktok Status</label>
                                <select class="form-control" name="pint_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->pint_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->pint_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('pint_status'))
                                <span class="text-danger">{{ $errors->first('pint_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Copy Right Text</label>
                                <input type="text" class="form-control" name="copy_right_text" value="@if($footer != null) {{ $footer->copy_right_text }} @endif">
                                @if ($errors->has('copy_right_text'))
                                <span class="text-danger">{{ $errors->first('copy_right_text') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Footer Image</label>
                                <br>
                                @if($footer != null && $footer->foot_img != null)
                                    <img src="{{ asset('uploads/foot_img/'.$footer->foot_img) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="foot_img">
                                @if ($errors->has('foot_img'))
                                <span class="text-danger">{{ $errors->first('foot_img') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- Information Section -->

                            <div class="">
                                <label class="form-label">Information Header</label>
                                <input type="text" class="form-control" name="information_header" value="@if($footer != null) {{ $footer->information_header }} @endif">
                                @if ($errors->has('information_header'))
                                <span class="text-danger">{{ $errors->first('information_header') }}</span>
                                @endif
                            </div>
                            <br>

                            @if($footer == null || $footer->information == null)
                            <div class="row mt-2 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Information Text</label>
                                    <input type="text" class="form-control" name="information_text[]" value="">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Information Link</label>
                                    <input type="text" class="form-control" name="information_link[]" value="">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" onclick="addInformation()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                               
                            </div>
                            @else
                            @foreach (json_decode($footer->information, true) as $key => $info)
                            <div class="row mt-2 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Information Text</label>
                                    <input type="text" class="form-control" name="information_text[]" value="{{ $info['text'] }}">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Information Link</label>
                                    <input type="text" class="form-control" name="information_link[]" value="{{ $info['link'] }}">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="addInformation()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                                @if($key > 0)                                    
                                <div class="col-md-1">
                                    <button type="button" onclick="removeRows(this);" class="btn btn-danger" style="margin-top: 25px;"><i class="bx bx-trash"></i></button>
                                </div>
                                @endif
                            </div>
                            @endforeach
                            @endif
                            
                            <div id="information_div"></div>


                            <!-- My Account Setion -->
                            <div class="">
                                <label class="form-label">My Account Header</label>
                                <input type="text" class="form-control" name="account_header" value="@if($footer != null) {{ $footer->my_account_header }} @endif">
                                @if ($errors->has('my_account_header'))
                                <span class="text-danger">{{ $errors->first('my_account_header') }}</span>
                                @endif
                            </div>
                            <br>

                            @if($footer == null || $footer->accounts == null)
                            <div class="row mt-2 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Account Text</label>
                                    <input type="text" class="form-control" name="account_text[]" value="">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Account Link</label>
                                    <input type="text" class="form-control" name="account_link[]" value="">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" onclick="addAccount()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                               
                            </div>
                            @else
                            @foreach (json_decode($footer->accounts, true) as $key => $acc)
                            <div class="row mt-2 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Account Text</label>
                                    <input type="text" class="form-control" name="account_text[]" value="{{ $acc['text'] }}">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Account Link</label>
                                    <input type="text" class="form-control" name="account_link[]" value="{{ $acc['link'] }}">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="addAccount()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                                @if($key > 0)                                    
                                <div class="col-md-1">
                                    <button type="button" onclick="removeRows2(this);" class="btn btn-danger" style="margin-top: 25px;"><i class="bx bx-trash"></i></button>
                                </div>
                                @endif
                            </div>
                            @endforeach
                            @endif
                            
                            <div id="account_div"></div>

                            <div class="">
                                <label class="form-label">Need Help Text</label>
                                <input type="text" class="form-control" name="need_help_text" value="@if($footer != null) {{ $footer->need_help_text }} @endif">
                                @if ($errors->has('need_help_text'))
                                <span class="text-danger">{{ $errors->first('need_help_text') }}</span>
                                @endif
                            </div>
                            <br>

                            <h5>Contact Details Section</h5>
                            <div class="">
                                <label class="form-label">Email</label>
                                @if($footer != null && $footer->footer_email != null)
                                <input type="text" class="form-control" name="footer_email" id="tagInput" value="{{ $footer->footer_email }}">
                                @else
                                <input type="text" class="form-control" name="footer_email" id="tagInput" value="">
                                @endif
                                
                                @if ($errors->has('footer_email'))
                                <span class="text-danger">{{ $errors->first('footer_email') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="footer_phone" id="tagInput2" value="@if($footer != null) {{ $footer->footer_phone }} @endif">
                                @if ($errors->has('footer_phone'))
                                <span class="text-danger">{{ $errors->first('footer_phone') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="footer_address" value="@if($footer != null) {{ $footer->footer_address }} @endif">
                                @if ($errors->has('footer_address'))
                                <span class="text-danger">{{ $errors->first('footer_address') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            {{-- <div class="">
                                <a href="{{ url('admin/update/pages/3') }}" id="manage_con" target="_balnk">
                                    <input type="button" class="form-control btn btn-primary px-4" value="Manage Contact" />
                                </a>
                            </div> --}}

                            <!-- Inside your form -->
                            <div class="save-button-container">
                                <button id="saveButton1" class="btn btn-primary">Save</button>
                            </div>

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

<!-- Add More Info -->
<script>
    function removeRows(button) {
            $(button).closest('.row').remove();
        }

        function addAccount() {
            var container = document.getElementById('account_div');
            var row = document.createElement('div');
            row.classList.add('row');

            // document.getElementById("more_variations").innerHTML 

            row.innerHTML = `<div class="row mt-2 ml-3 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Account Text</label>
                                    <input type="text" class="form-control" name="account_text[]" value="">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Account Link</label>
                                    <input type="text" class="form-control" name="account_link[]" value="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="addAccount()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="removeRows(this)" class="btn btn-danger" style="margin-top: 25px;"><i class="bx bx-trash"></i></button>
                                </div>
                               
                            </div>`;

            container.appendChild(row);

        }
</script>

<!-- Add more account -->
<script>
     function removeRows2(button) {
            $(button).closest('.row').remove();
        }

        function addInformation() {
            var container = document.getElementById('information_div');
            var row = document.createElement('div');
            row.classList.add('row');

            // document.getElementById("more_variations").innerHTML 

            row.innerHTML = `<div class="row mt-2 border border-5 p-2">
                                <div class="col-md-5">
                                    <label class="form-label">Information Text</label>
                                    <input type="text" class="form-control" name="information_text[]" value="">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Information Link</label>
                                    <input type="text" class="form-control" name="information_link[]" value="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="addInformation()" class="btn btn-primary" style="margin-top: 25px;"><i class="bx bx-plus"></i></button>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="removeRows2(this)" class="btn btn-danger" style="margin-top: 25px;"><i class="bx bx-trash"></i></button>
                                </div>
                            </div>`;

            container.appendChild(row);

        }
</script>

<!-- Add duplicate variations -->
<script src="../js/product_add.js"></script>

<script>
    $(document).ready(function() {
        function saveChanges() {
            $('#form1').submit();
        }

        $('#saveButton1').on('click', function() {
            saveChanges();
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Tagify on the input element
        var input = document.getElementById('tagInput');
        var input2 = document.getElementById('tagInput2');
        new Tagify(input);
        new Tagify(input2);
    });
</script>
@endsection