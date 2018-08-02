<!doctype html>
<html class="no-js" lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Smart Tech | Login</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('app/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('app/images/favicon.ico') }}" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ asset('app/rs-plugin/css/settings.css') }}" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="{{ asset('app/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/responsive.css') }}">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="{{ asset('app/js/vendors/modernizr.js') }}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
<![endif]-->
<style>
    header nav {
        background: #372e41;
    }
    
    .cate-style {
        float: left;
        display: inline-block;
        color: #fff !important;
        background: #f74b16;
        padding: 15px 20px;
        font-size: 17px;
        font-weight: bold;
        text-align: left;
        min-width: 270px;
    }
    
    .cart-pop .itm-cont {
        background: #f74b16;
    }

    .btn-round {
        font-size: 14px;
        font-weight: bold;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 50px;
        background: #f74b16;
        color: #fff;
    }

    .newslatter {
        background: #372e41;
        padding: 40px 0;
        position: relative;
        overflow: hidden;
    }

    .newslatter button {
        border: none;
        background: #f74b16;
        height: 50px;
        line-height: 50px;
        color: #fff;
        padding: 0 30px;
        position: absolute;
        right: -1px;
        top: 0px;
        font-size: 15px;
        font-weight: bold;
        border-radius: 0 50px 50px 0px;
    }
</style>
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  <!-- Header -->
  <header>
    <div class="container">
	  <div class="logo">
			<a href="{{ route('landing-page') }}">
				<img src="{{ asset('app/images/logo-3.png') }}" alt="">
			</a>
	  </div>
    </div>
  </header>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ route('landing-page') }}">Admin</a></li>
          <li class="active">Login</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
        	<div class="col-md-4"> 
            	<!-- Login Your Account -->
           	 	<h5>Admin Login</h5>
            
				<!-- FORM -->
				<form method="POST" action="{{ route('admin.login.submit')}}">
                    {{ csrf_field() }}
                    <ul class="row">
                        <li class="col-sm-12">
                        <label>Email
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </label>
                        </li>
                        <li class="col-sm-12">
                        <label>Password
                            <input type="password" id="password" class="form-control" name="password" placeholder="">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </label>
                        </li>
                        <li class="col-sm-6">
                        <div class="checkbox checkbox-primary">
                            <input id="cate1" class="styled" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <label for="cate1"> Remember Me </label>
                        </div>
                        </li>
                        <li class="col-sm-6"> <a href="href="{{ route('password.request') }}"" class="forget">Forgot your password?</a> </li>
                        <li class="col-sm-12 text-center">
                        	<button type="submit" class="btn-round">Login</button>
                        </li>
                    </ul>
				</form>
            </div>
            <div class="col-md-4"></div>
        </div>
      </div>
    </section>

  </div>
  <!-- End Content --> 
  
  
  <!-- Rights -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright © 2017 <a href="#." class="ri-li"> SmartTech </a>HTML5 template. All rights reserved</p>
        </div>
        <div class="col-sm-6 text-right"> <img src="{{ asset('app/images/card-icon.png') }}" alt=""> </div>
      </div>
    </div>
  </div>
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="{{ asset('app/js/vendors/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('app/js/vendors/wow.min.js') }}"></script> 
<script src="{{ asset('app/js/vendors/bootstrap.min.js') }}"></script> 
<script src="{{ asset('app/js/vendors/own-menu.js') }}"></script> 
<script src="{{ asset('app/js/vendors/jquery.sticky.js') }}"></script> 
<script src="{{ asset('app/js/vendors/owl.carousel.min.js') }}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{ asset('app/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('app/rs-plugin/js/jquery.tp.min.js') }}"></script> 
<script src="{{ asset('app/js/main.js') }}"></script> 
<script src="{{ asset('app/js/vendors/jquery.nouislider.min.js') }}"></script> 

</body>

</html>