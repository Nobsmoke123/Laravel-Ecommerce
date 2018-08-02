<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('custom/favicon.ico') }}">

    <!--Title-->
    <title>Login register | Mobel - Furniture Website Template</title>

    <!--CSS bundle -->
    <link rel="stylesheet" media="all" href="{{ asset('custom/css/bundle.min.css') }}">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .hover-menu ul{
            list-style:none;
            text-align:center;
            padding:0px;
        }

        .hover-menu ul li{
            margin:0px;
            padding:0px;
        }

        .hover-menu ul li a{
            text-transform:uppercase;
        }
    </style>
</head>

<body>
    <div class="page-loader loaded"></div>
    <div class="wrapper">
        <div class="">
            <script type="text/javascript" id='1qa2ws' charset='utf-8' src="{{ asset('custom/js/base.js') }}"></script>
            <!-- ==================  Navigation (main menu) ================== -->
            <script type="text/javascript">
                $(function() {
                    // Main navigation & mega menu
                    // ----------------------------------------------------------------

                    // Global menu variables

                    var objSearch = $('.search-wrapper'),
                        objLogin = $('.login-wrapper'),
                        objCart = $('.cart-wrapper'),
                        objMenu = $('.floating-menu'),
                        objMenuLink = $('.floating-menu a'),
                        $search = $('.open-search'),
                        $login = $('.open-login'),
                        $cart = $('.open-cart'),
                        $menu = $('.open-menu'),
                        $openDropdown = $('.open-dropdown'),
                        $settingsItem = $('.nav-settings .nav-settings-list li'),
                        $close = $('.close-menu');

                    // Open/close login

                    $login.on('click', function() {
                        toggleOpen($(this));
                        objLogin.toggleClass('open');
                        closeSearch();
                        closeCart();
                    });

                    // Open/close search bar

                    $search.on('click', function() {
                        toggleOpen($(this));
                        objSearch.toggleClass('open');
                        objSearch.find('input').focus();
                        closeLogin();
                        closeCart();
                    });

                    // Open/close cart

                    $cart.on('click', function() {
                        toggleOpen($(this));
                        objCart.toggleClass('open');
                        closeLogin();
                        closeSearch();
                    });

                    // Mobile menu open/close

                    $menu.on('click', function() {
                        objMenu.addClass('expanded');
                        closeSearch();
                        closeLogin();
                        closeCart();
                    });

                    // Settings language & currency dropdown

                    $settingsItem.on('click', function() {
                        var $value = $(this).closest('.nav-settings').find('.nav-settings-value');
                        $value.text($(this).text());
                    });

                    // Floating menu hyperlink
                    if ($('nav').hasClass('navbar-single-page')) {
                        objMenuLink.on('click', function() {
                            objMenu.removeClass('expanded');
                        });
                    }

                    // Open dropdown/megamenu

                    $openDropdown.on('click', function(e) {

                        e.preventDefault();

                        var liParent = $(this).parent().parent(),
                            liDropdown = liParent.find('.navbar-dropdown');

                        liParent.toggleClass('expanded');

                        if (liParent.hasClass('expanded')) {
                            liDropdown.slideDown();
                        } else {
                            liDropdown.slideUp();
                        }
                    });

                    // Close menu (mobile)

                    $close.on('click', function() {
                        $('nav').find('.expanded').removeClass('expanded');
                        $('nav').find('.navbar-dropdown').slideUp();
                    });

                    // Global functions

                    function toggleOpen(el) {
                        $(el).toggleClass('open');
                    }

                    function closeSearch() {
                        objSearch.removeClass('open');
                        $search.removeClass('open');
                    }

                    function closeLogin() {
                        objLogin.removeClass('open');
                        $login.removeClass('open');
                    }

                    function closeCart() {
                        objCart.removeClass('open');
                        $cart.removeClass('open');
                    }

                    // Sticky header
                    // ----------------------------------------------------------------

                    var navbarFixed = $('nav.navbar-fixed');

                    // When reload page - check if page has offset
                    if ($(document).scrollTop() > 94) {
                        navbarFixed.addClass('navbar-sticked');
                    }
                    // Add sticky menu on scroll
                    $(document).on('bind ready scroll', function() {
                        var docScroll = $(document).scrollTop();
                        if (docScroll >= 10) {
                            navbarFixed.addClass('navbar-sticked');
                        } else {
                            navbarFixed.removeClass('navbar-sticked');
                        }
                    });

                });
            </script>

            <!--Use class "navbar-fixed" or "navbar-default" -->
            <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

            <!-- ======================== Navigation ======================== -->

            <nav class="navbar-fixed">

                <div class="container">

                    <!-- ==========  Top navigation ========== -->

                    <div class="navigation navigation-top clearfix">
                        <ul>
                            <!--add active class for current page-->

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
                            <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                            @if(Auth::check())
                                <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li>
                            @endif
                        </ul>
                    </div>
                    <!--/navigation-top-->

                    <!-- ==========  Main navigation ========== -->

                    <div class="navigation navigation-main">

                        <!-- Setup your logo here-->

                        <a href="index.html" class="logo"><img src="{{ asset('custom/assets/images/logo.png') }}" alt=""></a>

                        <!-- Mobile toggle menu -->

                        <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                        <!-- Convertible menu (mobile/desktop)-->

                        <div class="floating-menu">

                            <!-- Mobile toggle menu trigger-->

                            <div class="close-menu-wrapper">
                                <span class="close-menu"><i class="icon icon-cross"></i></span>
                            </div>

                            <ul>
                                <li><a href="{{ route('shop') }}">Home</a></li>

                                <!-- Multi-content dropdown -->

                                <!-- Single dropdown-->
                                <!-- Furniture icons in dropdown-->

                                <li>
                                    <a href="{{ route('categories') }}">Catalog <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                    <div class="navbar-dropdown">
                                        <div class="navbar-box">

                                            <!-- box-1 (left-side)-->

                                            <div class="box-1">
                                                <div class="image">
                                                    <img src="{{ asset('custom/assets/images/blog-2.jpg') }}" alt="Lorem ipsum">
                                                </div>
                                                <div class="box">
                                                    <div class="h2">Best ideas</div>
                                                    <div class="clearfix">
                                                        <p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research
                                                            and a creative spirit.</p>
                                                        <a class="btn btn-clean btn-big" href="#">Explore</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/box-1-->

                                            <!-- box-2 (right-side)-->

                                            <div class="box-2">
                                                <div class="clearfix categories">
                                                    <div class="row">

                                                        <!--icon item-->

                                                        @foreach($categories as $category)
                                                            <div class="col-sm-3 col-xs-6">
                                                                <a href="{{ route('category-products',['id'=>$category->id]) }}">
                                                                    <figure>
                                                                        <i class="f-icon {{ $category->icon}}"></i>
                                                                        <figcaption>{{ $category->name }}</figcaption>
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!--/row-->
                                                </div>
                                                <!--/categories-->
                                            </div>
                                            <!--/box-2-->
                                        </div>
                                        <!--/navbar-box-->
                                    </div>
                                    <!--/navbar-dropdown-->
                                </li>

                                <!-- Mega menu dropdown -->

                                <li>
                                    <a href="#">Megamenu <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                    <div class="navbar-dropdown">
                                        <div class="navbar-box">
                                            <div class="box-2">
                                                <div class="box clearfix">
                                                    <div class="row">
                                                        <div class="clearfix">
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Seating</li>
                                                                    <li><a href="javascript:void(0);">Benches</a></li>
                                                                    <li><a href="javascript:void(0);">Submenu <span class="label label-warning">New</span></a></li>
                                                                    <li><a href="javascript:void(0);">Chaises</a></li>
                                                                    <li><a href="javascript:void(0);">Recliners</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Storage</li>
                                                                    <li><a href="javascript:void(0);">Bockcases</a></li>
                                                                    <li><a href="javascript:void(0);">Closets</a></li>
                                                                    <li><a href="javascript:void(0);">Wardrobes</a></li>
                                                                    <li><a href="javascript:void(0);">Dressers <span class="label label-success">Trending</span></a></li>
                                                                    <li><a href="javascript:void(0);">Sideboards </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Tables</li>
                                                                    <li><a href="javascript:void(0);">Consoles</a></li>
                                                                    <li><a href="javascript:void(0);">Desks</a></li>
                                                                    <li><a href="javascript:void(0);">Dining tables</a></li>
                                                                    <li><a href="javascript:void(0);">Occasional tables</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Chairs</li>
                                                                    <li><a href="javascript:void(0);">Dining Chairs</a></li>
                                                                    <li><a href="javascript:void(0);">Office Chairs</a></li>
                                                                    <li><a href="javascript:void(0);">Lounge Chairs <span class="label label-warning">Offer</span></a></li>
                                                                    <li><a href="javascript:void(0);">Stools</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Kitchen</li>
                                                                    <li><a href="javascript:void(0);">Kitchen types</a></li>
                                                                    <li><a href="javascript:void(0);">Kitchen elements <span class="label label-info">50%</span></a></li>
                                                                    <li><a href="javascript:void(0);">Bars</a></li>
                                                                    <li><a href="javascript:void(0);">Wall decoration</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Accessories</li>
                                                                    <li><a href="javascript:void(0);">Coat Racks</a></li>
                                                                    <li><a href="javascript:void(0);">Lazy bags <span class="label label-success">Info</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Beds</li>
                                                                    <li><a href="javascript:void(0);">Beds</a></li>
                                                                    <li><a href="javascript:void(0);">Sofabeds</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul>
                                                                    <li class="label">Entertainment</li>
                                                                    <li><a href="javascript:void(0);">Wall units <span class="label label-warning">Popular</span></a></li>
                                                                    <li><a href="javascript:void(0);">Media sets</a></li>
                                                                    <li><a href="javascript:void(0);">Decoration</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/box-->
                                            </div>
                                            <!--/box-2-->
                                        </div>
                                        <!--/navbar-box-->
                                    </div>
                                    <!--/navbar-dropdown-->
                                </li>

                                <!-- Simple menu link-->
                                @if(Auth::check())
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!--/floating-menu-->
                    </div>
                    <!--/navigation-main-->

                    <!-- ==========  Search wrapper ========== -->

                    <div class="search-wrapper">

                        <!-- Search form -->
                        <input class="form-control" placeholder="Search...">
                        <button class="btn btn-main btn-search">Go!</button>

                        <!-- Search results - live search -->
                        <div class="search-results">
                            <!-- <div class="search-result-items">
                                <div class="title h4">Products <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                                <ul>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Green corner</span> <span class="category">Sofa</span></a></li>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Laura</span> <span class="category">Armchairs</span></a></li>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Nude</span> <span class="category">Dining tables</span></a></li>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Aurora</span> <span class="category">Nightstands</span></a></li>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Dining set</span> <span class="category">Kitchen</span></a></li>
                                    <li><a href="#"><span class="id">42563</span> <span class="name">Seat chair</span> <span class="category">Bar sets</span></a></li>
                                </ul>
                            </div> -->
                            <!--/search-result-items-->
                            <!-- <div class="search-result-items">
                                <div class="title h4">Blog <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                                <ul>
                                    <li><a href="#"><span class="id">01 Jan</span> <span class="name">Creating the Perfect Gallery Wall </span> <span class="category">Interior ideas</span></a></li>
                                    <li><a href="#"><span class="id">12 Jan</span> <span class="name">Making the Most Out of Your Kids Old Bedroom</span> <span class="category">Interior ideas</span></a></li>
                                    <li><a href="#"><span class="id">28 Dec</span> <span class="name">Have a look at our new projects!</span> <span class="category">Modern design</span></a></li>
                                    <li><a href="#"><span class="id">31 Sep</span> <span class="name">Decorating When You're Starting Out or Starting Over</span> <span class="category">Best of 2017</span></a></li>
                                    <li><a href="#"><span class="id">22 Sep</span> <span class="name">The 3 Tricks that Quickly Became Rules</span> <span class="category">Tips for you</span></a></li>
                                </ul>
                            </div> -->
                            <!--/search-result-items-->
                        </div>
                        <!--/search-results-->
                    </div>

                    <!-- ==========  Login wrapper ========== -->

                        <div class="login-wrapper">
                            @if(Auth::check())
                                <div class="hover-menu">
                                    <ul class="">
                                        <li><a class ="btn btn-clean-dark" href="{{ url('profile/'.Auth::user()->id) }}">Profile</a></li>
                                        <li><a class ="btn btn-clean-dark" href="{{ url('cart/'.Auth::user()->id) }}">My Cart</a></li>
                                        <li><a class ="btn btn-clean-dark"href="#">My Wishlist</a></li>
                                        <li><a class ="btn btn-clean-dark"href="#">Settings</a></li>
                                        <li><a class ="btn btn-clean-dark"href="#">Orders</a></li>
                                        <li><a class ="btn btn-clean-dark"href="#">Support</a></li>
                                        <li><a class ="btn btn-clean-dark"href="#">Tickets</a></li>
                                        <li>
                                            <a class ="btn btn-clean-dark" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <form action="{{ route('login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="h4">Sign in</div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control" id="exampleInputEmail1" placeholder="Email">
                                         @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                                        <a href="{{ route('register') }}" class="open-popup">Don't have an account?</a>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-main">Submit</button>
                                </form>
                            @endif 
                        </div>  

                    <!-- ==========  Cart wrapper ========== -->
                    <div class="cart-wrapper">
                        <div class="checkout">
                            <div class="clearfix">

                                <!--cart item-->

                                <div class="row">

                                    <div class="cart-block cart-block-item clearfix">
                                        <div class="image">
                                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <div><a href="product.html">Green corner</a></div>
                                            <small>Green corner</small>
                                        </div>
                                        <div class="quantity">
                                            <input type="number" value="2" class="form-control form-quantity">
                                        </div>
                                        <div class="price">
                                            <span class="final">$ 1.998</span>
                                            <span class="discount">$ 2.666</span>
                                        </div>
                                        <!--delete-this-item-->
                                        <span class="icon icon-cross icon-delete"></span>
                                    </div>

                                    <!--cart item-->

                                    <div class="cart-block cart-block-item clearfix">
                                        <div class="image">
                                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <div><a href="product.html">Green corner</a></div>
                                            <small>Green corner</small>
                                        </div>
                                        <div class="quantity">
                                            <input type="number" value="2" class="form-control form-quantity">
                                        </div>
                                        <div class="price">
                                            <span class="final">$ 1.998</span>
                                            <span class="discount">$ 2.666</span>
                                        </div>
                                        <!--delete-this-item-->
                                        <span class="icon icon-cross icon-delete"></span>
                                    </div>

                                    <!--cart item-->

                                    <div class="cart-block cart-block-item clearfix">
                                        <div class="image">
                                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-3.png') }}" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <div><a href="product.html">Green corner</a></div>
                                            <small>Green corner</small>
                                        </div>
                                        <div class="quantity">
                                            <input type="number" value="2" class="form-control form-quantity">
                                        </div>
                                        <div class="price">
                                            <span class="final">$ 1.998</span>
                                            <span class="discount">$ 2.666</span>
                                        </div>
                                        <!--delete-this-item-->
                                        <span class="icon icon-cross icon-delete"></span>
                                    </div>

                                    <!--cart item-->

                                    <div class="cart-block cart-block-item clearfix">
                                        <div class="image">
                                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <div><a href="product.html">Green corner</a></div>
                                            <small>Green corner</small>
                                        </div>
                                        <div class="quantity">
                                            <input type="number" value="2" class="form-control form-quantity">
                                        </div>
                                        <div class="price">
                                            <span class="final">$ 1.998</span>
                                            <span class="discount">$ 2.666</span>
                                        </div>
                                        <!--delete-this-item-->
                                        <span class="icon icon-cross icon-delete"></span>
                                    </div>
                                </div>

                                <hr>

                                <!--cart prices -->

                                <div class="clearfix">
                                    <div class="cart-block cart-block-footer clearfix">
                                        <div>
                                            <strong>Discount 15%</strong>
                                        </div>
                                        <div>
                                            <span>$ 159,00</span>
                                        </div>
                                    </div>

                                    <div class="cart-block cart-block-footer clearfix">
                                        <div>
                                            <strong>Shipping</strong>
                                        </div>
                                        <div>
                                            <span>$ 30,00</span>
                                        </div>
                                    </div>

                                    <div class="cart-block cart-block-footer clearfix">
                                        <div>
                                            <strong>VAT</strong>
                                        </div>
                                        <div>
                                            <span>$ 59,00</span>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!--cart final price -->

                                <div class="clearfix">
                                    <div class="cart-block cart-block-footer clearfix">
                                        <div>
                                            <strong>Total</strong>
                                        </div>
                                        <div>
                                            <div class="h4 title">$ 1259,00</div>
                                        </div>
                                    </div>
                                </div>


                                <!--cart navigation -->

                                <div class="cart-block-buttons clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/checkout-->
                    </div>
                    <!--/cart-wrapper-->
                </div>
                <!--/container-->
            </nav>
        </div>

        <!-- ========================  Main header ======================== -->
        @if(Route::current()->getname() == "register")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Sign Up</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a class="active" href="{{ route('register') }}">Login &amp; Register</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "login")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Sign In</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a class="active" href="{{ route('register') }}">Login &amp; Register</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "contact")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Contact</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a class="active" href="{{ route('contact') }}">Contact</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() ==  "about")
            <section class="main-header main-header-blog" style="background-image:url({{ asset('custom/assets/images/gallery-1.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Our story</h2>
                        <p class="subtitle">A bit of history</p>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "category-products")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-3.jpg') }} )">
                <header>
                    <div class="container">
                        <h1 class="h2 title">Shop</h1>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="#">{{ $name }}</a></li>
                             <li><a class="active" href="#">Products List</a></li> 
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "product-list")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container">
                        <h1 class="h2 title">Shop</h1>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="#">{{ $name }}</a></li>
                             <li><a class="active" href="#">Products List</a></li> 
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "product")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container">
                        <h1 class="h2 title">{{ $title }}</h1>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="#">{{ $category->name }}</a></li>
                            <li><a class="active" href="#">Product overview</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "categories")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header class="">
                    <div class="container">
                        <h1 class="h2 title">Categories</h1>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "wishlist")

        @elseif(Route::current()->getname() == "cart")
            <section class="main-header" style="background-image:url( {{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">My Cart</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a class="active" href="{{ url('cart/'.Auth::user()->id) }}">Cart items</a></li>
                            <li><a href="{{ route('delivery') }}">Delivery</a></li>
                            <li><a href="{{ route('payment') }}">Payment</a></li>
                            <li><a href="{{ route('receipt') }}">Receipt</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "delivery")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Delivery</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('shop') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="{{ url ('cart/'.Auth::user()->id) }}">Cart items</a></li>
                            <li><a class="active" href="{{ route('delivery') }}">Delivery</a></li>
                            <li><a href="{{ route('payment') }}">Payment</a></li>
                            <li><a href="{{ route('receipt') }}">Receipt</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "payment")
            <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Payment Methods</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('shop') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="{{ url('cart/'.Auth::user()->id) }}">Cart items</a></li>
                            <li><a href="{{ route('delivery') }}">Delivery</a></li>
                            <li><a class="active" href="{{ route('payment') }}">Payment</a></li>
                            <li><a href="{{ route('receipt') }}">Receipt</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "receipt")
            <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
                <header>
                    <div class="container text-center">
                        <h2 class="h2 title">Payment Receipt</h2>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="{{ route('landing-page') }}"><span class="icon icon-home"></span></a></li>
                            <li><a href="{{ url('cart/'.Auth::user()->id) }}">Cart items</a></li>
                            <li><a href="{{ route('delivery') }}">Delivery</a></li>
                            <li><a href="{{ route('payment') }}">Payment</a></li>
                            <li><a class="active" href="{{ route('receipt') }}">Receipt</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @elseif(Route::current()->getname() == "user-profile")
            <section class="main-header" style="background-image:url({{ asset('custom/assets/images/gallery-2.jpg') }} )">
                <header>
                    <div class="container">
                        <h1 class="h2 title">Profile</h1>
                        <ol class="breadcrumb breadcrumb-inverted">
                            <li><a href="#"><span class="icon icon-home"></span></a></li>
                            <li><a href="#">LogRedeem</a></li>
                            <li><a class="active" href="#">Profile</a></li>
                        </ol>
                    </div>
                </header>
            </section>
        @endif

        @yield('content')
        
        <div class="">
            <!-- ================== Footer  ================== -->
            <footer>
                <div class="container">
                    <!--footer showroom-->
                     <div class="footer-showroom">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Visit our showroom</h2>
                                <p>200 12th Ave, New York, NY 10001, USA</p>
                                <p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <a href="#" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                                <div class="call-us h4"><span class="icon icon-phone-handset"></span> 333.278.06622</div>
                            </div>
                        </div>
                    </div> 

                    <!--footer links-->
                    <div class="footer-links">
                        <div class="row">
                            <div class="col-sm-4 col-md-2">
                                <h5>Browse by</h5>
                                <ul>
                                    <li><a href="#">Brand</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Category</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-2">
                                <h5>Recources</h5>
                                <ul>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Sales</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-2">
                                <h5>Our company</h5>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h5>Sign up for our newsletter</h5>
                                <p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                                <div class="form-group form-newsletter">
                                    <input class="form-control" type="text" name="email" value="" placeholder="Email address">
                                    <input type="submit" class="btn btn-clean btn-sm" value="Subscribe">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--footer social-->

                    <div class="footer-social">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" target="_blank"><i class="fa fa-download"></i> Download Mobel</a> &nbsp; | <a href="#">Sitemap</a> &nbsp; | &nbsp; <a href="#">Privacy policy</a>
                            </div>
                            <div class="col-sm-6 links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="scroll-top"><i class="icon icon-chevron-up"></i></div>
    </div>
    <!--/wrapper-->

    <!--JS bundle -->
    <script src="{{ asset('custom/js/bundle.min.js') }}"></script>
    @if(Route::current()->getname() == "product")
        <script>
            $(document).ready(function(){
                $('#quick_view,#image_view').click(function(){
                    var _id = $(this).attr("value");
                    // alert(_id);
                    
                    $.ajax({
                        type: "GET",
                        url : "/product/view/"+_id,
                        success:function(data){
                            
                            $('#product_name').text(data[0].name);
                            $('#product_category').text(data[1]);
                            $('#image1').attr('src','../../'+data[0].product_image);
                            $('#image2').attr('src','../../'+data[0].sub_image_1);
                            $('#image3').attr('src','../../'+data[0].sub_image_2);
                            $('#image4').attr('src','../../'+data[0].sub_image_3);
                            $('#manufacturer').text('LogRedeem');
                            $('#details').text(data[0].details);
                            $('#availablilty').text('in stock');
                            $('#discount').text(data[0].discounted_price);
                            $('#price').text(data[0].price);
                            $('#view_more').attr('href','/shop/product/'+_id);
                        },
                        error: function(data){
                            console.log('An Error Occured');
                        }
                    });
                });
            });
        </script>
    @elseif(Route::current()->getname() == "category-products")
        <script type="text/javascript">
            $(document).ready(function(){
                // alert("I'm Ready");
                // console.log("Before the dollar symbol");
                $('#quick_view,#image_view').click(function(){
                    var _id = $(this).attr("value");
                    // alert(_id);
                    // console.log("Inside the dollar symbol");
                    $.ajax({
                        type: "GET",
                        url : "/product/view/"+_id,
                        success:function(data){
                            
                            $('#product_name').text(data[0].name);
                            $('#product_category').text(data[1]);
                            $('#image1').attr('src','../../'+data[0].product_image);
                            $('#image2').attr('src','../../'+data[0].sub_image_1);
                            $('#image3').attr('src','../../'+data[0].sub_image_2);
                            $('#image4').attr('src','../../'+data[0].sub_image_3);
                            $('#manufacturer').text('LogRedeem');
                            $('#details').text(data[0].details);
                            $('#availablilty').text('in stock');
                            $('#discount').text(data[0].discounted_price);
                            $('#price').text(data[0].price);
                            $('#view_more').attr('href','/shop/product/'+_id);
                        },
                        error: function(data){
                            console.log('An Error Occured');
                        }
                    });
                });
                // console.log("Outside the dollar symbol");
            });
        </script>
    @endif
</body>

</html>