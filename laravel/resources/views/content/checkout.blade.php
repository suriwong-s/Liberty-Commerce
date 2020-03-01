@extends('layouts.app')

@section('content')
	
	<div>
		<div>
			<h2>Checkout</h2>
			<h3>Your Total :</h3><span>€</span>
			<form action="{{route('checkout')}}" method="POST" >
				<div>
					<h4>Name</h4>
					<h4>Address</h4>
					<h4>Telephone</h4>
					<h4>Credit Card</h4>
				</div>
			</form>
		</div>
	</div>

@endsection