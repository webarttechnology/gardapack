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
                                <h3>Edit Profile</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="p-form">

                                <form action="{{ url('edit-profile-action') }}" method="post">
                                    @csrf

                                    <div class="p-input">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Name">
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Email</label> 
                                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Emil">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>


                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Address</label>
                                                <input type="text" class="form-control" placeholder="Adress">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Phone No.</label>
                                                <input type="text" class="form-control" placeholder="Phone No.">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" placeholder="Adress">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" placeholder="Phone No.">
                                            </div>
                                        </div> --}}

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" placeholder="Phone Number" value="{{ Auth::user()->phone }}" name="phone" required>
                                                @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="">Address</label>
                                                <textarea class="form-control text-light" name="address" id="address" cols="30" rows="10" placeholder="Enter Your Address" required>{{ Auth::user()->address }}</textarea>
                                                @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
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
</section>

</main>

<x-userFooter />