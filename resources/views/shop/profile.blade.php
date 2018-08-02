@extends('shop.master')

@section('content')
   <section class="login-wrapper login-wrapper-page">
        <div class="container">

            <header class="hidden">
                <h3 class="h3 title">Profile Page</h3>
            </header>

            <div class="row">

                <!-- === left content === -->

                <div class="col-md-6 col-md-offset-3">

                    <!-- === login-wrapper === -->

                    <div class="login-wrapper">

                        <div class="white-block">

                            <!--signin-->

                            <!-- <div class="login-block login-block-signin">

                                <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                <hr>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control" placeholder="User ID">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" value="" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <span class="checkbox">
                                            <input type="checkbox" id="checkBoxId3">
                                            <label for="checkBoxId3">Remember me</label>
                                        </span>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                        <a href="#" class="btn btn-main">Login</a>
                                    </div>
                                </div>
                            </div> -->
                            <!--/signin-->
                            <!--signup-->
                            @if(session('status'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="login-block login-block-signup">

                                <div class="h4 text-center">User Profile </div>

                                <hr>
                                <form action="{{ route('profile-update',['id'=>$details[0]->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->first_name}}" class="form-control" placeholder="First name: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->last_name}}" class="form-control" placeholder="Last name: *">
                                            </div>
                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->address}}" class="form-control" placeholder="Address:">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->zip_code}}" class="form-control" placeholder="Zip code: *">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->city }}" class="form-control" placeholder="City: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->email }}" class="form-control" placeholder="Email: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="{{ $details[0]->phone }}" class="form-control" placeholder="Phone: *">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <hr>
                                            <p class="text-center">Update Password Settings</p>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" name="old_password" class="form-control" placeholder="Old Password: *">
                                                    @if ($errors->has('old_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('old_password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" name="new_password" class="form-control" placeholder="New Password: *">
                                                    @if ($errors->has('new_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('new_password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm New Password: *">
                                                    @if ($errors->has('confirm_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('confirm_password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <hr>
                                        </div> 

                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-main btn-block" value="Update account">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!--/signup-->
                        </div>
                    </div>
                    <!--/login-wrapper-->
                </div>
                <!--/col-md-6-->

            </div>

        </div>
    </section>
@endsection