@extends('layouts.app')

@section('content')


<div class="container-5">
  @foreach($produit as $produit)
     <div class="container-header-5">{{ __('Update Produit') }}</div>
     <form method="POST" action="{{ route('admin') }}">
         @csrf
      <div>
        <h4 type="Product">Title</h4>
        <p>{{$produit->titre}}</p>
      	<h4 type="Description">Description</h4>
        <p>{{$produit->description}}</p>
      	<h4 type="Price">Price</h4>
        <p>{{$produit->prix}}</p>
      	<h4 type="photo">{{ __('Image') }}</h4>
        <p>{{$produit->image}}</p>
        <label type="quantity">Quantity</label>
        <input type="text" name="quantite"><br>
      	<button type="submit" class="button-5"><a href="{{ url('/admin/update/'.$produit->id) }}"></a>{{ __('Update Product') }}</button>
      </div>
    </form>
     @endforeach
</div>
 
@endsection