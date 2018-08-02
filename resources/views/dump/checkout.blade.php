@extends('layouts.base')

@section('content')
  <!-- Oder-success -->
    <section>
      <div class="container"> 
        <!-- Payout Method -->
        
        <div class="order-success"> <i class="fa fa-check"></i>
          <h6>Congratulation! Your order has been processed</h6>
          <p>Aenean dui mi, tempus non volutpat eget, molestie a orci. Nullam eget sem et eros laoreet rutrum. Quisque sem ante, feugiat quis lorem in.</p>
          <a href="{{ route('landing-page') }}" class="btn-round">Return to Shop</a> </div>
      </div>
    </section>
@endsection