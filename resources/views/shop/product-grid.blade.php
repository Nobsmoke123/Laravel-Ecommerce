@extends('shop.master')

@section('content')

    <!-- ========================  Icons slider ======================== -->

    <section class="owl-icons-wrapper">

        <!-- === header === -->

        <header class="hidden">
            <h2>Product categories</h2>
        </header>

        <div class="container">

            <div class="owl-icons">

                <!-- === icon item === -->
                @foreach($categories as $category)
                    <a href="{{ route('category-products',['id'=>$category->id]) }}">
                        <figure>
                            <i class="f-icon {{ $category->icon }}"></i>
                            <figcaption>{{ $category->name }}</figcaption>
                        </figure>
                    </a>
                @endforeach
            </div> <!--/owl-icons-->
        </div> <!--/container-->
    </section>

    <!-- ======================== Products ======================== -->

    <section class="products">
        <div class="container">

            <header class="hidden">
                <h3 class="h3 title">Product category grid</h3>
            </header>

            <div class="row">

                <!-- === product-filters === -->

                <!-- <div class="col-md-3 col-xs-12"> 

                    <div id="filters" class="filters">

                        <div class="filter-box active">
                            <div class="title">Price</div>
                            <div class="filter-content">
                                <div class="price-filter">
                                    <input type="text" id="range-price-slider" value="" name="range" />
                                </div>
                            </div>
                        </div>

                        <div class="filter-box active">
                            <div class="title">
                                Discount
                            </div>
                            <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" id="price-all" name="group-dicount" value="" checked="checked">
                                        <label for="price-all">All</label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="price-discount" name="group-dicount" value=".price-discount">
                                        <label for="price-discount">Discount price</label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="price-discounts" name="group-dicount" value=".price-x">
                                        <label for="price-discounts">Discount price</label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="price-regular" name="group-dicount" value=".price-regular">
                                        <label for="price-regular">Regular price</label>
                                    </span>
                            </div>
                        </div> 

                        <div class="filter-box active">
                            <div class="title">
                                Type
                            </div>
                            <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="group-type" id="category-all" value="" checked="checked">
                                        <label for="category-all">All <i>(1200)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="group-type" id="category-sofa" value=".category-sofa">
                                        <label for="category-sofa">Sofa <i>(1200)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="group-type" id="category-armchair" value=".category-armchair">
                                        <label for="category-armchair">Armchairs <i>(12)</i></label>
                                    </span>
                            </div>
                        </div> 

                        <div class="filter-box active">
                            <div class="title">
                                Material
                            </div>
                            <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" id="material-all" name="group-material" value="" checked="checked">
                                        <label for="material-all">All <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="material-leather" name="group-material" value=".material-leather">
                                        <label for="material-leather">Leather <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="material-wood" name="group-material" value=".material-wood">
                                        <label for="material-wood">Wood <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="material-metal" name="group-material" value=".material-metal">
                                        <label for="material-metal">Metal <i>(80)</i></label>
                                    </span>
                            </div>
                        </div> 

                        <div class="toggle-filters-close btn btn-main visible-xs visible-sm">
                            Close window
                        </div>
                    </div>
                </div> -->

                <!--product items-->

                <div class="col-md-12 col-xs-12">

                    <div class="sort-bar clearfix">
                        <!-- <div class="sort-results pull-left">
                            <select>
                                <option value="1">10</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                                <option value="4">All</option>
                            </select>
                            <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                        </div> -->
                        <!--Sort options-->
                        <div class="sort-options pull-right">
                            <span class="hidden-xs">Sort by</span>
                            <select id="sort-price">
                                <option data-option-value="asc">Price: lowest</option>
                                <option data-option-value="desc">Price: highest</option>
                            </select>
                            <!--Grid-list view-->
                                <span class="grid-list">
                                    <a href=""><i class="fa fa-th-large"></i></a>
                                    <a href=""><i class="fa fa-align-justify"></i></a>
                                    <a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
                                </span>
                        </div>
                    </div>

                    <div id="products" class="row">

                        <!-- === product-item === -->
                        @foreach($products as $product)
                            <div class="col-md-4 col-xs-4 item">
                                <article>
                                    <div class="info">
                                            <span class="add-favorite">
                                                <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                            </span>
                                            <span>
                                               <a href="#productid1" class="mfp-open" data-title="Quick view" id="quick_view" value="{{ $product->id }}"><i class="icon icon-eye"></i></a>
                                            </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <a href="{{ route('cart-add',['pdct_id'=>$product->id]) }}"><i class="icon icon-cart"></i></a>
                                    </div>
                                    <div class="figure-grid">
                                        <span class="label">-50%</span>
                                        <div class="image">
                                            <a href="#productid1" id="image_view" value="{{ $product->id }}" class="mfp-open">
                                                <img src="{{ asset(''.$product->product_image) }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4">
												 <a href="{{ route('product',['id'=>$product->id]) }} ">{{ $product->name }} 
												</a>
											</h2>
                                            <sub>${{ $product->price }}</sub>
                                            <sup>$ <span class="price">{{ $product->discounted_price }}</span>,-</sup>
                                            <span class="description clearfix">{{ $product->description}}</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div><!--/row-->

                </div> <!--/product items-->

            </div><!--/row-->
            <!-- ========================  Product info popup - quick view ======================== -->

            <div class="popup-main mfp-hide" id="productid1">
				<!-- === product popup === -->

				<div class="product">

					<!-- === popup-title === -->

					<div class="popup-title">
						<div class="h1 title"><span id="product_name">Laura</span> <small id="product_category">product category</small></div>
					</div>

					<!-- === product gallery === -->

					<div class="owl-product-gallery">
						<img id="image1" src="{{ asset('custom/assets/images/product-1.png') }}" alt="" width="640" />
						<img id="image2" src="{{ asset('custom/assets/images/product-2.png') }}" alt="" width="640" />
						<img id="image3" src="{{ asset('custom/assets/images/product-3.png') }}" alt="" width="640" />
						<img id="image4" src="{{ asset('custom/assets/images/product-4.png') }}" alt="" width="640" />
					</div>

					<!-- === product-popup-info === -->
					<div class="popup-content">
						<div class="product-info-wrapper">
							<div class="row">
								<!-- === left-column === -->
								<div class="col-sm-6">
									<div class="info-box">
										<strong>Maifacturer</strong>
										<span id="manufacturer">Brand name</span>
									</div>
									<div class="info-box">
										<strong>Materials</strong>
										<span id="details">Wood, Leather, Acrylic</span>
									</div>
									<div class="info-box">
										<strong>Availability</strong>
										<span><i class="fa fa-check-square-o"></i><span id="availability">in stock</span></span>
									</div>
								</div>
							</div>
							<!--/row-->
						</div>
						<!--/product-info-wrapper-->
					</div>
					<!--/popup-content-->
					<!-- === product-popup-footer === -->

					<div class="popup-table">
						<div class="popup-cell">
							<div class="price">
								<span class="h3">$ <span id="discount">1999.00</span> <small id="price">$ 2999,00</small></span>
							</div>
						</div>
						<div class="popup-cell">
							<div class="popup-buttons">
								<a href="" id="view_more"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
								<a href="#"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
							</div>
						</div>
					</div>
				</div>
				<!--/product-->
			</div> <!--popup-main-->
        </div><!--/container-->
    </section>
@endsection