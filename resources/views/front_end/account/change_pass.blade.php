<x-userHeader />

@include('front_end.commons.session-msg')

<main>
    
    <section class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard">
                        <div class="user-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="h-user">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                        <div class="d-board">
                            <ul>
                                <li><a href="{{ url('my-account') }}"><i class="bi bi-pencil-square"></i>Edit Profile</a></li>
                                <li><a href="{{ url('change-password') }}"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Change
                                        Password</a>
                                <li><a href="{{ url('order-history') }}"><i class="bi bi-bag-check-fill"></i>Order History</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="p-edit">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="prfl-head">
                                    <h3>Change Password</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="p-form">

                                    <form action="{{ url('change-password-action') }}" method="post">
                                        @csrf

                                        <div class="p-input">
                                            <div class="row mb-3">
                                               
                                                <div class="col-md-12">
                                                    <label for="">New Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="New Password" required>
                                                        @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="">Confirm Password</label>
                                                    <input type="password" name="conf_password" class="form-control"
                                                        placeholder="Confirm Password" required>
                                                        @if ($errors->has('conf_password'))
                                                        <span class="text-danger">{{ $errors->first('conf_password') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <div class="s-button">
                                                        <button class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<x-userFooter />