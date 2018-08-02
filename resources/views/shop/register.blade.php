@extends('shop.master')

@section('content')
    <!-- ========================  Login & register ======================== -->
    <section class="login-wrapper login-wrapper-page">
        <div class="container">

            <header class="hidden">
                <h3 class="h3 title">Sign in</h3>
            </header>

            <div class="row">

                <!-- === left content === -->

                <div class="col-md-6 col-md-offset-3">

                    <!-- === login-wrapper === -->

                    <div class="login-wrapper">

                        <div class="white-block">

                            <!--signin-->

                            <div class="login-block login-block-signin">
                                <form action="{{ route('login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="h4">
                                        Sign in 
                                        <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                                 @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId3" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="checkBoxId3">Remember me</label>
                                            </span>
                                        </div>

                                        <div class="col-xs-6 text-right">
                                            <button type="submit" class="btn btn-main">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/signin-->
                            <!--signup-->

                            <div class="login-block login-block-signup">
                                <form action="{{route('register') }}" method="POST">
                                    <div class="h4">Register now <a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a></div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="First name: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Last name: *">
                                            </div>
                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Address:">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Zip code: *">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="City: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Email: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Phone: *">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId1">
                                                <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as well as read and understood our terms of <a href="#">business contidions</a></label>
                                            </span>
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId2">
                                                <label for="checkBoxId2">Subscribe to exciting newsletters and great tips</label>
                                            </span>
                                            <hr>
                                        </div>

                                        <div class="col-md-12">
                                            <a href="#" class="btn btn-main btn-block">Create account</a>
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