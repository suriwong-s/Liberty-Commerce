@extends('layouts.app')

@section('content')
    <div class="panier">
  	<div class="feature">
        <div class="feature-inner">
          <h2>My shopping bag</h2>
    	</div>
    <div class="back">
      <h3><a href="{{ route('catalogue') }}">continue shopping</a></h3>
    </div>
    <div id="basketbar">
    	<div id="basket-inner">
    		<table class="basket">
      			<tr>
					     <th>item</th>
               <th>price</th>
					     <th id="qty">quantity</th>
               <th></th>
					     <th>subtotal</th>   
      			</tr>
            <tbody class="show-cart"  method="POST" action="{{ route('panier') }}" >
      			</tbody>
     		</table>
       	</div>
       	<div id="total">
        <p>Total : €</p><span class="total-price"></span>
       	</div>
      	 <div id="paiement">
        	<p><button id="valide" method="POST" type="submit">pay now</button></p>
           @csrf
      	</div>
      </div>
  </div>
 </div>
    <div class="clear"></div>
@endsection