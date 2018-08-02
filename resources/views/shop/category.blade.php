@extends('shop.master')

@section('content')
     <!-- ========================  Products ======================== -->

        <section class="products">
            <div class="container">

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Product categories</h2>
                            <div class="text">
                                <p>Select category</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === product-item === -->
                    @foreach($category_items as $category)
                        <div class="col-md-4 col-xs-6">
                            <article>
                                <div class="figure-block">
                                    <div class="image">
                                        <a href="{{ route('category-products',['id'=>$category->id]) }}">
                                            <img src="{{ asset('custom/assets/images/product-1.png') }}" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4 text-center"><a href="{{ route('category-products',['id'=>$category->id]) }}">{{ $category->name}}</a></h2>
                                        <!-- <sup>Category description</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span> -->
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div><!--/row-->
                <div class="wrapper-more">
                    {{ $category_items->links() }}
                </div>
                
            </div><!--/container-->
        </section>
        
@endsection