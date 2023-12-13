<x-userHeader />
<div class="wholesale">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="{{ url('wholesale/password/change/action', $code) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-title">
                        <h3>Wholesale Change Password</h3>
                        <p>application for wholesale</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 px-5">
                            
                            <div class="row">
                                <div class="col-md-12 my-2">
                                    <p><label for><span>New Password</span> <em>*</em></label></p>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Confirm Password</span> <em>*</em></label></p>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <div class="buttons">
                                        {{-- <button class="btn" type>Save</button> --}}
                                        <button class="btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<x-userFooter />
