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
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container"> 
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
                
            </ul>
        </div>
        
        <!-- NAV RIGHT -->
        <div class="nav-right"> 
            
        </div>
      </div>
    </nav>
  </header>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ route('landing-page') }}">Home</a></li>
          <li class="active">Authentication</li>
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
           	 	<h5>Login Your Account</h5>
            
				<!-- FORM -->
				<form method="POST" action="{{ route('login') }}">
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
                        <li class="col-sm-6"> <a href="#" class="forget">Forgot your password?</a> </li>
                        <li class="col-sm-12 text-center">
                        	<button type="submit" class="btn-round">Login</button>
                        </li>
                        <li class="col-sm-12">
							<a href="{{ route('register') }}" class="forget"><span>Don't have an acount,</span> Register</a>
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
  
  <!-- Footer -->
  <footer>
    <div class="container"> 
      
      <!-- Footer Upside Links -->
      <div class="foot-link">
        <ul>
          <li><a href="#."> About us </a></li>
          <li><a href="#."> Customer Service </a></li>
          <li><a href="#."> Privacy Policy </a></li>
          <li><a href="#."> Site Map </a></li>
          <li><a href="#."> Search Terms </a></li>
          <li><a href="#."> Advanced Search </a></li>
          <li><a href="#."> Orders and Returns </a></li>
          <li><a href="#."> Contact Us</a></li>
        </ul>
      </div>
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4>Contact SmartTech!</h4>
          <p>Address: 45 Grand Central Terminal New York, NY 1017
            United State USA</p>
          <p>Phone: (+100) 123 456 7890</p>
          <p>Email: Support@smarttech.com</p>
          <!-- Social Links -->
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> <a href="#."><i class="fa fa-google"></i></a> </div>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Categories</h4>
          <ul class="links-footer">
            <li><a href="#.">Home Audio & Theater</a></li>
            <li><a href="#."> TV & Video</a></li>
            <li><a href="#."> Camera, Photo & Video</a></li>
            <li><a href="#."> Cell Phones & Accessories</a></li>
            <li><a href="#."> Headphones</a></li>
            <li><a href="#."> Video Games</a></li>
            <li><a href="#."> Bluetooth & Wireless</a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#.">Shipping & Returns</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> International Shipping</a></li>
            <li><a href="#."> Affiliates</a></li>
            <li><a href="#."> Contact </a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-2">
          <h4>Information</h4>
          <ul class="links-footer">
            <li><a href="#.">Our Blog</a></li>
            <li><a href="#."> About Our Shop</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> Delivery infomation</a></li>
            <li><a href="#."> Store Locations</a></li>
            <li><a href="#."> FAQs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
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