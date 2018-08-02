@extends('shop.master')

@section('content')
    <!-- ========================  Checkout ======================== -->

    <div class="step-wrapper">
        <div class="container">

            <div class="stepper">
                <ul class="row">
                    <li class="col-md-3 active">
                        <span data-text="Cart items"></span>
                    </li>
                    <li class="col-md-3">
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


    <section class="checkout">

        <div class="container">

            <header class="hidden">
                <h3 class="h3 title">Checkout - Step 1</h3>
            </header>

            @if(session('status'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
            @endif

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
                    @foreach($cartItems as $cartItem)
                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="{{ route('product',['id'=>$cartItem->product_id]) }}"><img src="{{ asset($cartItem->product_image) }}" alt=""/>
                                </a>
                            </div>

                            <div class="title">
                                <div class="h4"><a href="{{ route('product',['id'=>$cartItem->product_id]) }}"></a></div>
                                <div>{{ $cartItem->product_name }}</div>
                            </div>
                            <div class="quantity">
                                <form id="cart-update" action="{{ route('cart-edit',['id'=>$cartItem->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="number" value="{{ $cartItem->quantity }}" name="quantity" class="form-control form-quantity" />
                                    <a href="{{ route('cart-edit',['id'=>$cartItem->id]) }}" title="Edit quantity of product" onclick="event.preventDefault();
                                                        document.getElementById('cart-update').submit();"><span class="icon icon-pencil"></span> Edit</a>
                                </form>
                            </div>
                            <div class="price">
                                <span class="final h3">$ {{ $cartItem->discounted_price }}</span>
                                <span class="discount">$ {{ $cartItem->price }}</span>
                            </div>
                            <!--delete-this-item-->
                            <a href="{{ route('cart-delete',['id'=>$cartItem->id]) }}"><span class="icon icon-cross icon-delete"></span></a>
                        </div>
                    @endforeach
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
                    <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                        <div>
                                <span class="checkbox">
                                    <input type="checkbox" id="couponCodeID">
                                    <label for="couponCodeID">Promo code</label>
                                    <input type="text" class="form-control form-coupon" value="" placeholder="Enter your coupon code" />
                                </span>
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
                        <a href="{{ route('shop') }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Shop more</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ route('delivery') }}" class="btn btn-main"><span class="icon icon-cart"></span> Proceed to delivery</a>
                    </div>
                </div>
            </div>

        </div> <!--/container-->

    </section>
@endsection