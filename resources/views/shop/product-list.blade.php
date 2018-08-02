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
                        <a href="{{ route('category-products',['id'=>$category->id ]) }}">
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
                    <h3 class="h3 title">Product category list</h3>
                </header>

                <div class="row">

                    <!-- === product-filters === -->

                    <div class="col-md-3 col-xs-12">
                        <div class="filters">
                            <!--Price-->
                            <div class="filter-box active">
                                <div class="title">Price</div>
                                <div class="filter-content">
                                    <div class="price-filter">
                                        <input type="text" id="range-price-slider" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!--Availability-->
                            <div class="filter-box active">
                                <div class="title">
                                    Availability
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId1" checked="checked">
                                        <label for="availableId1">In stock <i>(152)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId2">
                                        <label for="availableId2">1 Week <i>(100)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId3">
                                        <label for="availableId3">2 Weeks <i>(80)</i></label>
                                    </span>
                                </div>
                            </div> <!--/filter-box-->
                            <!--Discount-->
                            <div class="filter-box active">
                                <div class="title">
                                    Discount
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" id="discountId1" name="discountPrice" checked="checked">
                                        <label for="discountId1">Discount price</label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="discountId2" name="discountPrice">
                                        <label for="discountId2">Regular price</label>
                                    </span>
                                </div>
                            </div> <!--/filter-box-->
                            <!--Type-->
                            <div class="filter-box active">
                                <div class="title">
                                    Type
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeIdAll" checked="checked">
                                        <label for="typeIdAll">All <i>(1200)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId1">
                                        <label for="typeId1">Sofa <i>(20)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId2">
                                        <label for="typeId2">Armchairs <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId3">
                                        <label for="typeId3">Chairs <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId4">
                                        <label for="typeId4">Dining tables <i>(140)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId5">
                                        <label for="typeId5">Media storage <i>(20)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId6">
                                        <label for="typeId6">Tables <i>(10)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId7">
                                        <label for="typeId7">Bookcase <i>(450)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId8">
                                        <label for="typeId8">Nightstands <i>(750)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId9">
                                        <label for="typeId9">Children room <i>(960)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId10">
                                        <label for="typeId10">Kitchen <i>(44)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId11">
                                        <label for="typeId11">Bathroom <i>(5)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId12">
                                        <label for="typeId12">Wardrobe <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId13">
                                        <label for="typeId13">Shoe cabinet <i>(23)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId14">
                                        <label for="typeId14">Office <i>(24)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId15">
                                        <label for="typeId15">Bar sets <i>(92)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId16">
                                        <label for="typeId16">Lightning <i>(1120)</i></label>
                                    </span>
                                </div>
                            </div> <!--/filter-box-->
                            <!--Material-->
                            <div class="filter-box active">
                                <div class="title">
                                    Material
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matIdAll">
                                        <label for="matIdAll">All <i>(450)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId1">
                                        <label for="matId1">Blend <i>(11)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId2">
                                        <label for="matId2">Leather <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId3">
                                        <label for="matId3">Wood <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId4">
                                        <label for="matId4">Shell <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId5">
                                        <label for="matId5">Metal <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId6">
                                        <label for="matId6">Aluminium <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId7">
                                        <label for="matId7">Acrilic <i>(80)</i></label>
                                    </span>
                                </div>
                            </div> <!--/filter-box-->
                            <!--close filters on mobile / update filters-->
                            <div class="toggle-filters-close btn btn-main">
                                Update search
                            </div>

                        </div> <!--/filters-->
                    </div>

                    <!-- === product items === -->

                    <div class="col-md-9 col-xs-12">

                        <div class="sort-bar clearfix">
                            <div class="sort-results pull-left">
                                <!--Showing result per page-->
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">50</option>
                                    <option value="3">100</option>
                                    <option value="4">All</option>
                                </select>
                                <!--Items counter-->
                                <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                            </div>
                            <div class="sort-options pull-right">
                                <span class="hidden-xs">Sort by</span>
                                <!--Sort options-->
                                <select>
                                    <option value="1">Name</option>
                                    <option value="2">Popular</option>
                                    <option value="3">Price: lowest</option>
                                    <option value="4">Price: highest</option>
                                </select>
                                <!--Grid-list view-->
                                <span class="grid-list">
                                    <a href="products-grid.html"><i class="fa fa-th-large"></i></a>
                                    <a href="products-list.html"><i class="fa fa-align-justify"></i></a>
                                    <a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
                                </span>
                            </div>
                        </div>

                        <div class="row">

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-1.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Green corner</a></h2>
                                            <sub>$ 1499,-</sub>
                                            <sup>$ 1099,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <span class="label label-warning">New</span>
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-2.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Laura</a></h2>
                                            <sub>$ 3999,-</sub>
                                            <sup>$ 3499,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-3.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Nude</a></h2>
                                            <sup>$ 2999,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>

                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-4.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Aurora</a></h2>
                                            <sup>$ 299,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <span class="label label-danger">-50%</span>
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-5.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Dining set</a></h2>
                                            <sub>$ 1999,-</sub>
                                            <sup>$ 1499,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-6.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Seat chair</a></h2>
                                            <sup>$ 896,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>

                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-4.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Aurora</a></h2>
                                            <sup>$ 299,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- === product-item === -->

                            <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <span class="label label-danger">-50%</span>
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="{{ asset('custom/assets/images/product-5.png') }}" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Dining set</a></h2>
                                            <sub>$ 1999,-</sub>
                                            <sup>$ 1499,-</sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div><!--/row-->
                        <!--Pagination-->
                        <div class="pagination-wrapper">

                            <!-- <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul> -->
                        </div>

                    </div> <!--/product items-->

                </div><!--/row-->
                <!-- ========================  Product info popup - quick view ======================== -->

                <div class="popup-main mfp-hide" id="productid1">

                    <!-- === product popup === -->

                    <div class="product">

                        <!-- === popup-title === -->

                        <div class="popup-title">
                            <div class="h1 title">Laura <small>product category</small></div>
                        </div>

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery">
                            <img src="{{ asset('custom/assets/images/product-1.png') }}" alt="" width="640" />
                            <img src="{{ asset('custom/assets/images/product-2.png') }}" alt="" width="640" />
                            <img src="{{ asset('custom/assets/images/product-3.png') }}" alt="" width="640" />
                            <img src="{{ asset('custom/assets/images/product-4.png') }}" alt="" width="640" />
                        </div>

                        <!-- === product-popup-info === -->

                        <div class="popup-content">
                            <div class="product-info-wrapper">
                                <div class="row">

                                    <!-- === left-column === -->

                                    <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Maifacturer</strong>
                                            <span>Brand name</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Materials</strong>
                                            <span>Wood, Leather, Acrylic</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Availability</strong>
                                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                                        </div>
                                    </div>

                                    <!-- === right-column === -->

                                    <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Available Colors</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-red"></span>
                                                <span class="color-btn color-btn-blue checked"></span>
                                                <span class="color-btn color-btn-green"></span>
                                                <span class="color-btn color-btn-gray"></span>
                                                <span class="color-btn color-btn-biege"></span>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <strong>Choose size</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-biege">S</span>
                                                <span class="color-btn color-btn-biege checked">M</span>
                                                <span class="color-btn color-btn-biege">XL</span>
                                                <span class="color-btn color-btn-biege">XXL</span>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--/row-->
                            </div> <!--/product-info-wrapper-->
                        </div><!--/popup-content-->

                        <!-- === product-popup-footer === -->

                        <div class="popup-table">
                            <div class="popup-cell">
                                <div class="price">
                                    <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                                </div>
                            </div>
                            <div class="popup-cell">
                                <div class="popup-buttons">
                                    <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                    <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                                </div>
                            </div>
                        </div>

                    </div> <!--/product-->
                </div> <!--popup-main-->
            </div><!--/container-->
        </section>
@endsection