<x-userHeader />
<div class="wholesale">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="{{ url('wholesale/application/action') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-title">
                        <h3>Wholesale Application</h3>
                        <p>application for wholesale</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 px-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><label for class="odd"><span>Name</span> <em>*</em></label></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <input type="text" class="form-control" name="fname" required>
                                    <p class="subla">First</p>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" class="form-control" name="lname" required>
                                    <p class="subla">Last</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Email</span> <em>*</em></label></p>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Phone</span> <em>*</em></label></p>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <p><label for><span>Company Name</span> <em>*</em></label></p>
                                    <input type="text" name="company_name" class="form-control" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Reseller ID</span> <em>*</em></label></p>
                                    <input type="text" class="form-control" name="reseller_id" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Reseller ID Upload </span> <em>*</em></label></p>
                                    <input type="file" class="form-control" name="img" required>
                                </div>
                                <div class="col-md-12 my-2">
                                    <p><label for><span>Address</span> <em>*</em></label></p>
                                    <input type="text" class="form-control" name="address1" required>
                                    <p class="subla">Street Address</p>
                                </div>
                                <div class="col-md-12 my-2">
                                    <input type="text" class="form-control" name="address2">
                                    <p class="subla">Address Line 2</p>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" class="form-control" name="city">
                                    <p class="subla">City</p>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" class="form-control" name="state">
                                    <p class="subla">State/Region/Province</p>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" class="form-control" name="zip">
                                    <p class="subla">Postal / Zip Code</p>
                                </div>
                                <div class="col-md-6 my-2">
                                    <select class="form-control" name="country">
                                        <option selected>--Select--</option>
                                        <option value="USA">USA</option>
                                        <option value="India">India</option>
                                    </select>
                                    <p class="subla">Country</p>
                                </div>
                                <div class="col-md-12 my-2">
                                    <div class="buttons">
                                        {{-- <button class="btn" type>Save</button> --}}
                                        <button class="btn" type="submit">Submit</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="wrning">
                                        <i class="bi bi-info-circle"></i> Do not submit confidential information such as
                                        credit card details, mobile and ATM PINs, OTPs, account passwords, etc. <a
                                            href="#">Report Abuse</a>
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
