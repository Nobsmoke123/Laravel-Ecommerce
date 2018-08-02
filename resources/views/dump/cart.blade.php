@extends('layouts.base')

@section('content')
	<!-- Ship Process -->
		<div class="ship-process padding-top-30 padding-bottom-30">
			<div class="container">
				<ul class="row">
				
				<!-- Step 1 -->
				<li class="col-sm-3 current">
					<div class="media-left"> <i class="flaticon-shopping"></i> </div>
					<div class="media-body"> <span>Step 1</span>
					<h6>Shopping Cart</h6>
					</div>
				</li>
				
				<!-- Step 2 -->
				<li class="col-sm-3">
					<div class="media-left"> <i class="flaticon-business"></i> </div>
					<div class="media-body"> <span>Step 2</span>
					<h6>Payment Methods</h6>
					</div>
				</li>
				
				<!-- Step 3 -->
				<li class="col-sm-3">
					<div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
					<div class="media-body"> <span>Step 3</span>
					<h6>Delivery Methods</h6>
					</div>
				</li>
				
				<!-- Step 4 -->
				<li class="col-sm-3">
					<div class="media-left"> <i class="fa fa-check"></i> </div>
					<div class="media-body"> <span>Step 4</span>
					<h6>Confirmation</h6>
					</div>
				</li>
				</ul>
			</div>
		</div>
    
		<!-- Shopping Cart -->
		<section class="shopping-cart padding-bottom-60">
			<div class="container">
			<table class="table">
				<thead>
				<tr>
					<th>Items</th>
					<th class="text-center">Price</th>
					<th class="text-center">Quantity</th>
					<th class="text-center">Total Price </th>
					<th>&nbsp; </th>
				</tr>
				</thead>
				<tbody>
				
				<!-- Item Cart -->
				<tr>
					<td><div class="media">
						<div class="media-left"> <a href="#."> <img class="img-responsive" src="{{ asset('app/images/item-img-1-1.jpg') }} " alt="" > </a> </div>
						<div class="media-body">
						<p>E-book Reader Lector De Libros
							Digitales 7''</p>
						</div>
					</div></td>
					<td class="text-center padding-top-60">$200.00</td>
					<td class="text-center"><!-- Quinty -->
					
					<div class="quinty padding-top-20">
						<input type="number" value="02">
					</div></td>
					<td class="text-center padding-top-60">$400.00</td>
					<td class="text-center padding-top-60"><a href="#." class="remove"><i class="fa fa-close"></i></a></td>
				</tr>
				
				<!-- Item Cart -->
				<tr>
					<td><div class="media">
						<div class="media-left"> <a href="#."> <img class="img-responsive" src="{{ asset('app/images/item-img-1-2.jpg') }} " alt="" > </a> </div>
						<div class="media-body">
						<p>E-book Reader Lector De Libros
							Digitales 7''</p>
						</div>
					</div></td>
					<td class="text-center padding-top-60">$200.00</td>
					<td class="text-center"><div class="quinty padding-top-20">
						<input type="number" value="02">
					</div></td>
					<td class="text-center padding-top-60">$400.00</td>
					<td class="text-center padding-top-60"><a href="#." class="remove"><i class="fa fa-close"></i></a></td>
				</tr>
				</tbody>
			</table>
			
			<!-- Promotion -->
			<div class="promo">
				<div class="coupen">
				<label> Promotion Code
					<input type="text" placeholder="Your code here">
					<button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
				</label>
				</div>
				
				<!-- Grand total -->
				<div class="g-totel">
				<h5>Grand total: <span>$500.00</span></h5>
				</div>
			</div>
			
			<!-- Button -->
			<div class="pro-btn"> <a href="{{ route('landing-page')}}" class="btn-round btn-light">Continue Shopping</a> <a href="{{ route('payment') }}" class="btn-round">Go Payment Methods</a> </div>
			</div>
		</section>
@endsection