@extends('layouts.base')

@section('content')
	<!-- Error Page -->
    <section>
		<div class="container">
			<div class="order-success error-page"> <img src="{{ asset('app/images/error-img.jpg') }} " alt="" >
				<h3>Error <span>404</span> Not Found</h3>
				<p>We’re sorry but the page you are looking for does nor exist.<br>
				You could return to <a href="#.">homepage</a> or using <a href="#.">search!</a></p>
			</div>
		</div>
    </section>
@endsection