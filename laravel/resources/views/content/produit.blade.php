@extends('layouts.app')

@section('content')

 <div class="feature">
        <div class="feature-inner">
          <h2>Product</h2>
        </div>
      </div>
      <div id="content">
        <div id="content-inner">
          <nav id="mini_sidebar">
            <div class="widget">
              <h5><a href="{{ route('catalogue') }}">Back to catalog</a></h5>
            </div>
          </nav>
         
          @foreach($produit as $produit)
          <main id="productbar">
            <div id="image">
              <img src="{{ $produit->image }}" alt="bag photo's">
            </div>
            <div id="detail">
              <div class="product_text">
                <h1>{{$produit->titre}}</h1>
                <h2>by sunny</h2>
                <h5>{{$produit->categorie->categorie_name}}</h5>
                <p>{{$produit->description}}</p>
              </div>
              <div class="stock">
                <p>{{$produit->disponibilité}}<span>({{$produit->quantité}})</span>
                 @if(Auth::user()->isAdmin())
                <span id="editor"><a href="{{ url('/admin/updateProduct/'.$produit->id) }}">Edit</a></span>
              @endif
              </p>
              </div>
              <div class="product_price">
                <p>{{$produit->prix}}<span>€</span></p>
              </div>
              <div class="buttom">
                <p><button><a class="addtocart" data-name="{{$produit->titre}}" data-price="{{$produit->prix}}" data-id="{{$produit->id}}" data-url="{{ url('produit/'.$produit->id) }}" >add to cart</a></button></p>
              </div>
            </div>
          </main>
          @endforeach
        </div>
        <div class="clear"></div>
      </div>

@endsection