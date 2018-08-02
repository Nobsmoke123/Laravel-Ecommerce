@extends('shop.master')

@section('content')
    <!-- ========================  Step wrapper ======================== -->

    <div class="step-wrapper">
        <div class="container">

            <div class="stepper">
                <ul class="row">
                    <li class="col-md-3 active">
                        <span data-text="Cart items"></span>
                    </li>
                    <li class="col-md-3 active">
                        <span data-text="Delivery"></span>
                    </li>
                    <li class="col-md-3">
                        <span data-text="Payment"></span>
                    </li>
                    <li class="col-md-3">
                        <span data-text="Receipt"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ========================  Checkout ======================== -->

    <section class="checkout">
        <div class="container">

            <header class="hidden">
                <h3 class="h3 title">Checkout - Step 2</h3>
            </header>

            <!-- ========================  Cart navigation ======================== -->

            <div class="clearfix">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="{{ url ('cart/'.Auth::user()->id) }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ route('payment') }}" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                    </div>
                </div>
            </div>

            <!-- ========================  Delivery ======================== -->

            <div class="cart-wrapper">

                <div class="note-block">
                    <div class="row">

                        <!-- === left content === -->

                        <div class="col-md-6">

                            <!-- === login-wrapper === -->

                            <div class="login-wrapper">

                                <div class="white-block">

                                    <!--signin-->

                                    <div class="login-block login-block-signin">

                                        <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                        <hr />

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
                                    </div> <!--/signin-->
                                    <!--signup-->

                                    <div class="login-block login-block-signup">

                                        <div class="h4">Register now <a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a></div>

                                        <hr />

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
                                                    <input type="text" value="" class="form-control" placeholder="Company name:">
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
                                                <hr />
                                                <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId1">
                                                        <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as well as read and understood our terms of <a href="#">business contidions</a></label>
                                                    </span>
                                                <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId2">
                                                        <label for="checkBoxId2">Subscribe to exciting newsletters and great tips</label>
                                                    </span>
                                                <hr />
                                            </div>

                                            <div class="col-md-12">
                                                <a href="#" class="btn btn-main btn-block">Create account</a>
                                            </div>

                                        </div>
                                    </div> <!--/signup-->
                                </div>
                            </div> <!--/login-wrapper-->
                        </div> <!--/col-md-6-->
                        <!-- === right content === -->

                        <div class="col-md-6">

                            <div class="white-block">

                                <div class="h4">Choose delivery</div>

                                <hr />

                                <span class="checkbox">
                                        <input type="radio" id="deliveryId1" name="deliveryOption">
                                        <label for="deliveryId1">Delivery 1-3 Days - <strong>$50,00</strong></label>
                                    </span>

                                <span class="checkbox">
                                        <input type="radio" id="deliveryId2" name="deliveryOption">
                                        <label for="deliveryId2">Fast delivery - <strong>$199,00</strong></label>
                                    </span>

                                <span class="checkbox">
                                        <input type="radio" id="deliveryId3" name="deliveryOption">
                                        <label for="deliveryId3">Pick up in the store - <strong>Free</strong></label>
                                    </span>

                                <hr />

                                <div class="clearfix">
                                    <p>A frequently overlooked, powerful fulfillment option is offering local pick-up. If you have a physical location and can allow your customers to forgo paying shipping costs altogether, you should!</p>                            <p><strong>Benefits:</strong></p>
                                    <ul>
                                        <li>Avoid both shipping and packaging costs</li>
                                        <li>Develop a face-to-face relationship with your customers</li>
                                        <li>Potential for additional purchases while customers are at your store</li>
                                    </ul>
                                    <p><strong>Challenges:</strong></p>
                                    <ul>
                                        <li>Limited business hours can sometimes make it difficult to coordinate pickup</li>
                                        <li>Shoppers who cross state lines or ZIP codes may not know the sales tax rates in your area</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- ========================  Cart wrapper ======================== -->

            <div class="cart-wrapper">
                <!--cart header -->

                <div class="cart-block cart-block-header clearfix">
                    <div>
                        <span>Product</span>
                    </div>
                    <div>
                        <span>&nbsp;</span>
                    </div>
                    <div>
                        <span>Quantity</span>
                    </div>
                    <div class="text-right">
                        <span>Price</span>
                    </div>
                </div>

                <!--cart items-->

                <div class="clearfix">
                    <div class="cart-block cart-block-item clearfix">
                        <div class="image">
                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-1.png') }}" alt="" /></a>
                        </div>
                        <div class="title">
                            <div class="h4"><a href="product.html">Green corner</a></div>
                            <div>Green corner</div>
                        </div>
                        <div class="quantity">
                            <strong>1</strong>
                        </div>
                        <div class="price">
                            <span class="final h3">$ 1.998</span>
                            <span class="discount">$ 2.666</span>
                        </div>
                    </div>

                    <div class="cart-block cart-block-item clearfix">
                        <div class="image">
                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-2.png') }}" alt="" /></a>
                        </div>
                        <div class="title">
                            <div class="h4"><a href="product.html">Green corner</a></div>
                            <div>Green corner</div>
                        </div>
                        <div class="quantity">
                            <strong>1</strong>
                        </div>
                        <div class="price">
                            <span class="final h3">$ 1.998</span>
                            <span class="discount">$ 2.666</span>
                        </div>
                    </div>

                    <div class="cart-block cart-block-item clearfix">
                        <div class="image">
                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-3.png') }}" alt="" /></a>
                        </div>
                        <div class="title">
                            <div class="h4"><a href="product.html">Green corner</a></div>
                            <div>Green corner</div>
                        </div>
                        <div class="quantity">
                            <strong>1</strong>
                        </div>
                        <div class="price">
                            <span class="final h3">$ 1.998</span>
                            <span class="discount">$ 2.666</span>
                        </div>
                    </div>

                    <div class="cart-block cart-block-item clearfix">
                        <div class="image">
                            <a href="product.html"><img src="{{ asset('custom/assets/images/product-3.png') }}" alt="" /></a>
                        </div>
                        <div class="title">
                            <div class="h4"><a href="product.html">Green corner</a></div>
                            <div>Green corner</div>
                        </div>
                        <div class="quantity">
                            <strong>1</strong>
                        </div>
                        <div class="price">
                            <span class="final h3">$ 1.998</span>
                            <span class="discount">$ 2.666</span>
                        </div>
                    </div>
                </div>

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

                <!--cart final price -->

                <div class="clearfix">
                    <div class="cart-block cart-block-footer clearfix">
                        <div>
                            <strong>Promo code included!</strong>
                        </div>
                        <div>
                            <div class="h2 title">$ 1259,00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================  Cart navigation ======================== -->

            <div class="clearfix">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="{{ url ('cart/'.Auth::user()->id) }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ route('payment') }}" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                    </div>
                </div>
            </div>


        </div> <!--/container-->

    </section>
@endsection