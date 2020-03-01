@extends('layouts.app')

@section('content')
<div class="container-5">
     <div class="container-header-5">{{ __('Nouveau Produit') }}</div>
     <form method="POST" action="{{ route('admin') }}">
         @csrf

      @foreach($produit as $produit)
      <div>
        <h2>Update</h2>
        <h4 type="Product">Title</h4>
        <p>{{$produit->titre}}</p>
      	<h4 type="Description">Description</h4>
        <p>{{$produit->description}}</p>
      	<h4 type="Price">Price</h4>
        <p>{{$produit->prix}}</p>
      	<h4 type="photo">{{ __('Image') }}</h4>
        <p>{{$produit->image}}</p>
      	<h4 type="quantite">Quantity</h4>
      	<input type="text" name="quantite"><br>
      	<button type="submit" method="POST" action="{{ route('modifyQTY') }}" class="button-5">{{ __('Update Product') }}</button>
      </div>
      @endeach
     </form>
</div>
@endsection