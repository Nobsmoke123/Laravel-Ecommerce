<!doctype html>
<html class="no-js" lang="en">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="M_Adnan" />
		<!-- Document Title -->
		<title>Smart Tech - Ecommerce HTML5 Template</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('app/images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('app/images/favicon.ico')}}" type="image/x-icon">

		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{asset('app/rs-plugin/css/settings.css')}}" media="screen" />

		<!-- StyleSheets -->
		<link rel="stylesheet" href="{{asset('app/css/ionicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('app/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('app/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('app/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('app/css/responsive.css')}}">

		<!-- Fonts Online -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet">

		<!-- JavaScripts -->
		<script src="{{asset('app/js/vendors/modernizr.js')}}"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  	</head>

	<body>
		<!-- Page Wrapper -->
		<div id="wrap" class="layout-3"> 
  			<!-- Header -->
			<header class="header-style-3">
				<div class="container">
					<div class="logo">
						<a href="{{ route('landing-page') }}">
							<img src="{{asset('app/images/logo-3.png')}}" alt="">
						</a>
					</div>
				
					<!-- Nav Header -->
					<nav class="navbar ownmenu"> 
						<!-- Categories -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> 	<span><i class="fa fa-navicon"></i></span>
							</button>
						</div>
						
						@if(Auth::check())
							<!-- NAV -->
							<div class="collapse navbar-collapse" id="nav-open-btn">
								<ul class="nav">
									<li>
										<a href="{{ route('landing-page') }}"> Shop </a>
									</li>

									<li>
										<a href="{{ route('cart') }}"> My Cart </a>
									</li>

									<li>
										<a href="{{ url('user-profile/'.Auth::user()->id )}}"> Profile </a>
									</li>

									<li>
										<a href="{{ route('landing-page') }}"> Settings </a>
									</li>

									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">Logout</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</div>
						@else
							<div class="collapse navbar-collapse" id="nav-open-btn">
								<ul class="nav">
									<li>
										<a href="{{ route('login') }}"> Login </a>
									</li>

									<li>
										<a href="{{ route('register') }}"> Register </a>
									</li>
								</ul>
							</div>
						@endif
					</nav>
				
					
					<!-- Cart Part -->
					<ul class="nav navbar-right">
						<li class="dropdown">
							<i class="fa fa-user" style="font-size:26px;"></i> 
							@if(Auth::check())
								<strong>{{ Auth::user()->first_name }}</strong>
							@else
								<strong>Guest</strong>
							@endif
						</li>
					</ul>
				</div>

				<div class="nav-uder-bar">
				<div class="container"> 
					
					<!-- Categories -->
					<div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
					<div class="cate-bar-in">
						<div id="cater" class="collapse in">
							<ul>
								@foreach($categories as $category)
									<li><a href="#."> {{ $category->name }}</a></li>
								@endforeach
							
							</ul>
						</div>
					</div>
					</div>
					
					<!-- search -->
					<div class="search-cate">
						<select class="selectpicker">
							<option> All Categories</option>
							@foreach($categories as $category)
								<option>{{ $category->name }} </option>
							@endforeach
						</select>
					<input type="search" placeholder="Search entire store here...">
					<button class="submit" type="submit"><i class="icon-magnifier"></i></button>
					</div>
					<!-- NAV RIGHT -->
					<div class="nav-right">
						<span class="call-mun">
							<!-- <i class="fa fa-phone"></i>  -->
							<!-- <strong>Hotline:</strong> 
							(+100) 123 456 7890 -->
						</span>
					</div>
				</div>
				</div>
			</header>
  
  <!-- Slid Sec -->
  <section class="slid-sec with-bg-wide" > 
    <!-- Main Slider Start -->
    <div class="tp-banner-container">
      <div class="tp-banner-full">
        <ul>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('app/images/trans-bg.png')}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sft tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="-100" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Now Back in Stock <br> (New Price) </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="-40" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:36px; color:#f74b16; font-weight:800; white-space: nowrap;">SmartPhone 6S </div>
            
            <!-- LAYER NR. 1 -->
            
            <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="15" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:20px; font-weight:normal; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Now only: </div>
                                     
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="880" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$450.00 </div>
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="300" 
                                     data-y="center" data-voffset="0" 
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 1;"><img src="{{asset('app/images/slide-item-6.png')}}" alt="" > </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="90"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 10;"><a href="#." class="btn-round">Shop Now</a> </div>
          </li>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('app/images/trans-bg.png')}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sft tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="-90" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Ultra Portable Bluetooth </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="-40" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:36px; color:#f74b16; font-weight:800; white-space: nowrap;">F31 GamePad </div>
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$450.00 </div>
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="320" 
                                     data-y="center" data-voffset="0" 
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 1;"><img src="{{asset('app/images/slide-item-3-1.png')}}" alt="" > </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme" 
                                     data-x="left" data-hoffset="780" 
                                     data-y="center" data-voffset="90"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 10;"><a href="#." class="btn-round">Shop Now</a> </div>
          </li>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('app/images/trans-bg.png')}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sft tp-resizeme" 
                                     data-x="left" data-hoffset="800" 
                                     data-y="center" data-voffset="-80" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Quantium dot Display </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="800" 
                                     data-y="center" data-voffset="-40" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:36px; color:#f74b16; font-weight:800; white-space: nowrap;">Smart SUHD Television </div>
            
            <!-- LAYER NR. 1 -->            
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="800" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$759.99 </div>
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="350" 
                                     data-y="center" data-voffset="0" 
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 1;"><img src="{{asset('app/images/slide-item-5.png')}}" alt="" > </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme" 
                                     data-x="left" data-hoffset="800" 
                                     data-y="center" data-voffset="90"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 10;"><a href="#." class="btn-round">Shop Now</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Banner -->
    <section class="disply-sec slid-sec margin-bottom-0">
      <div class="container">
        <div class="row"> 
          
          <!-- Smartphone -->
          <div class="col-md-6">
            <div class="product">
              <div class="like-bnr ultra">
                <div class="position-center-center">
                  <h5>Ultra-portable Bluetooth</h5>
                  <h4>A2 Speaker</h4>
                  <span class="price">$170.00</span> </div>
              </div>
            </div>
          </div>
          
          <!-- Sport -->
          <div class="col-md-6">
            <div class="product">
              <div class="like-bnr ultra-1">
                <div class="position-center-center">
                  <h5>Pickup Where U left off</h5>
                  <h4>S9 SmartPhone</h4>
                  <span class="price">$259.99</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Top Selling Week -->
    <section class="padding-top-30 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Featured Categories</h2>
          <hr>
        </div>
        <div class="row"> 
          
          <!-- TV & Audios -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-1.png')}}" alt="" >
              <h5>TV & Audios</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!-- SmartPhones -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-2.png')}}" alt="" >
              <h5>SmartPhones</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!-- Game Console -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-3.png')}}" alt="" >
              <h5>Game Console</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
          
          <!-- Desktop & Laptop -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-4.png')}}" alt="" >
              <h5>Desktop & Laptop</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!-- Watches -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-5.png')}}" alt="" >
              <h5>Watches</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!-- Accessories -->
          <div class="col-md-4">
            <div class="some-cate"> <img src="{{asset('app/images/feture-item-6.png')}}" alt="" >
              <h5>Accessories</h5>
              <ul>
                <li><a href="#."> Smart Television</a></li>
                <li><a href="#."> QLED TV</a></li>
                <li><a href="#."> Audios</a></li>
                <li><a href="#."> Headphones</a></li>
                <li><a href="#."> View all <i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Wide Sale Banner -->
    <section>
      <div class="container">
        <div class="wide-bnr">
          <h5>Saving up to <span class="color-primary"> 75% OFF </span>all items first purchase!</h5>
          <div class="btn">Use Code: Z381aC3</div>
        </div>
      </div>
    </section>
    
    <!-- Weekly Featured -->
    <section class="padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Weekly Featured</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-4 with-nav"> 
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-1.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 </div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-2.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-3.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-4.jpg')}}" alt="" > <span class="new-tag">New</span> 
              
              <!-- Content --> 
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-5.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-6.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-7.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-8.jpg')}}" alt="" > <span class="new-tag">New</span> 
              
              <!-- Content --> 
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Latest Products -->
    <section class="padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Latest Products</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-4 with-nav"> 
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-1.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 </div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-2.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-3.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-4.jpg')}}" alt="" > <span class="new-tag">New</span> 
              
              <!-- Content --> 
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-5.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-6.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-7.jpg')}}" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="{{asset('app/images/item-img-1-8.jpg')}}" alt="" > <span class="new-tag">New</span> 
              
              <!-- Content --> 
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Shipping Info -->
    <section class="shipping-info">
      <div class="container">
        <ul>
          
          <!-- Free Shipping -->
          <li>
            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
            <div class="media-body">
              <h5>Free Shipping</h5>
              <span>On order over $99</span></div>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
            <div class="media-body">
              <h5>Money Return</h5>
              <span>30 Days money return</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="flaticon-operator"></i> </div>
            <div class="media-body">
              <h5>Support 24/7</h5>
              <span>Hotline: (+100) 123 456 7890</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body">
              <h5>Safe Payment</h5>
              <span>Protect online payment</span></div>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- Top Selling Week -->
    <section class="padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>From our Blog</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav"> 
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="{{asset('app/images/blog-img-1.jpg')}}" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="{{asset('app/images/blog-img-2.jpg')}}" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the power to take your business to the
              next level. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="{{asset('app/images/blog-img-3.jpg')}}" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Latest Products -->
    <section class="padding-bottom-60">
      <div class="container">
        <div class="row"> 
          
          <!-- Top Selling -->
          <div class="col-md-4"> 
            
            <!-- heading -->
            <div class="heading">
              <h2>Top Selling</h2>
              <hr>
            </div>
            <div class="shop-listing"> 
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-1.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$350</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-2.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$350</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-3.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$350</span> </div>
              </div>
            </div>
          </div>
          
          <!-- Most viewed -->
          <div class="col-md-4"> 
            
            <!-- heading -->
            <div class="heading">
              <h2>Most viewed</h2>
              <hr>
            </div>
            <div class="shop-listing"> 
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-4.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$350</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-5.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Laptop Alienware 15” i7 For Playing Game</a> <span class="price">$85</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-6.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Mp3 Sumergible Deportivo Slim Con 8GB</a> <span class="price">$50</span> </div>
              </div>
            </div>
          </div>
          
          <!-- Top Rated -->
          <div class="col-md-4"> 
            
            <!-- heading -->
            <div class="heading">
              <h2>Top Rated</h2>
              <hr>
            </div>
            <div class="shop-listing"> 
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-7.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$525</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-8.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Laptop Alienware 15” i7 For Playing Game</a> <span class="price">$248</span> </div>
              </div>
              
              <!-- Items list -->
              <div class="media">
                <div class="media-left"> <a href="#." class="avatar"><img class="img-responsive" src="{{asset('app/images/item-img-1-9.jpg')}}" alt="" ></a> </div>
                <div class="media-body"> <a href="#">Teclado Inalambrico Bluetooth Mouse</a> <span class="price">$58</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="{{asset('app/images/c-img-1.png')}}" alt="" ></li>
          <li><img src="{{asset('app/images/c-img-2.png')}}" alt="" ></li>
          <li><img src="{{asset('app/images/c-img-3.png')}}" alt="" ></li>
          <li><img src="{{asset('app/images/c-img-4.png')}}" alt="" ></li>
          <li><img src="{{asset('app/images/c-img-5.png')}}" alt="" ></li>
        </ul>
      </div>
    </section>
    
    <!-- Newslatter -->
    <section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form>
          </div>
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
        <div class="col-sm-6 text-right"> <img src="{{asset('app/images/card-icon.png')}}" alt=""> </div>
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
<script src="{{asset('app/js/vendors/jquery/jquery.min.js')}}"></script> 
<script src="{{asset('app/js/vendors/wow.min.js')}}"></script> 
<script src="{{asset('app/js/vendors/bootstrap.min.js')}}"></script> 
<script src="{{asset('app/js/vendors/own-menu.js')}}"></script> 
<script src="{{asset('app/js/vendors/jquery.sticky.js')}}"></script> 
<script src="{{asset('app/js/vendors/owl.carousel.min.js')}}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{asset('app/rs-plugin/js/jquery.tp.t.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('app/rs-plugin/js/jquery.tp.min.js')}}"></script> 
<script src="{{asset('app/js/main.js')}}"></script>
</body>

</html>