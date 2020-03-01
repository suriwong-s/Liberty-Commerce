@extends('layouts.app')

@section('content')
<div class="container-5">
    <div class="container-header-5">{{ __('Nouveau Produit') }}</div>
    <form method="POST" action="{{ route('admin') }}">
         @csrf

	    <label type="Product">{{ __('Definir le nom du produit') }}</label>
      	<input type="text-5" name="titre"><br>

      	<label type="Description">{{ __('Description du produit') }}</label>
      	<input type="text-5" name="description"><br>

      	<label type="Price">{{ __('Definir le prix') }}</label>
      	<input type="text-5" name="prix"><br>

      	<label type="photo">{{ __('Image') }}</label>
      	<input type="text-5" name="image"><br>

      	<label type="quantity">{{ __('Definir la quantite') }}</label>
      	<input type="text-5" name="quantite"><br>

      	<button type="submit" class="button-5">{{ __('Ajouter le produit') }}</button>
    </form>
</div>
<button onclick="repeatAjax()" class="button-5">{{ __('Actualiser') }}</button>
@php($count = 0)
@if($users)
    @foreach($users as $user)
        @if($user->isOnline())
           <p hidden>  {{$count = $count + 1}} </p>
        @endif
    @endforeach
@endif
<div class="user-co" id="count-user">Utilisateurs connectés : {{$count}}</div>
<div class="order">Les commandes :

    <div class="total-orders" id="order-count"><span class="tabulation">Nombre de commandes passées : {{'$commande->count(id)'}}</span></div>
    <div class="biggest-order" id="biggest-id"><span class="tabulation">La plus grosse commande : {{'App\Facture::max(commande)'}}</span></div>
</div>
@endsection
