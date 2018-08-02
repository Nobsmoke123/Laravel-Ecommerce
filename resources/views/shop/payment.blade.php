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
                        <li class="col-md-3 active">
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
                    <h3 class="h3 title">Checkout - Step 3</h3>
                </header>

                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="{{ route('delivery') }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to delivery</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('receipt') }}" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                        </div>
                    </div>
                </div>

                <!-- ========================  Payment ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">

                        <div class="row">
                            <!-- === left content === -->

                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Order details</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Order no.</strong> <br />
                                                <span>52522-63259226</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Transaction ID</strong> <br />
                                                <span>2265996</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Order date</strong> <br />
                                                <span>06/30/2017</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Shipping arrival</strong> <br />
                                                <span>07/30/2017</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="h4">Shipping info</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name</strong> <br />
                                                <span>John Doe</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br />
                                                <span>johndoe@company.com</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br />
                                                <span>+122 523 352</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Zip</strong><br />
                                                <span>94107</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>City</strong><br />
                                                <span>San Francisco, California</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Address</strong><br />
                                                <span>795 Folsom Ave, Suite 600</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Company name</strong><br />
                                                <span>Mobel Inc</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Company phone</strong><br />
                                                <span>+122 333 6665</span>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <!--/col-md-6-->

                            </div>

                            <!-- === right content === -->

                            <div class="col-md-6">
                                <div class="white-block">

                                    <div class="h4">Choose payment</div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="radio" id="paymentID1" name="paymentOption" checked="checked">
                                        <label for="paymentID1">
                                            <strong>Pay via credit cart</strong> <br />
                                            <small>(MasterCard, Maestro, Visa, Visa Electron, JCB and American Express)</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="paymentID2" name="paymentOption">
                                        <label for="paymentID2">
                                            <strong>PayPal</strong> <br />
                                            <small>Purchase with your fingertips. Look for us the next time you're paying from a mobile app, and checkout faster on thousands of mobile websites.</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="paymentID3" name="paymentOption">
                                        <label for="paymentID3">
                                            <strong>Pay via bank transfer</strong> <br />
                                            <small>You can make payments directly into our bank account and email the bank wire transfer receipt to us. We recommend bank wire transfer for payments exceeding $500,00. </small>
                                        </label>
                                    </span>

                                    <hr />

                                    <p>Please allow three working days for the payment confirmation to reflect in your <a href="#">online account</a>. Once your payment is confirmed, we will generate your e-invoice, which you can view/print from your account
                                        or email.</p>
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
                            <a href="{{ route('delivery') }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to delivery</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('receipt') }}" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                        </div>
                    </div>
                </div>


            </div>
            <!--/container-->

        </section>
@endsection