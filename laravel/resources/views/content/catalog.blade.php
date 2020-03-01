@extends('layouts.app')

@section('content')
    <div class="feature">
        <div class="feature-inner">
          <h2>Product Catalog</h2>
        </div>

      </div>
      <div id="content">
        <div id="content-inner">
          <div id="rightbar">
          @foreach($produit as $produit)
          <main id="contentbar">
              <div class="card">
                <a href="{{ url('produit/'.$produit->id) }}"><img src="{{ $produit->image }}"  alt="bag photo's" style="width:100%"></a>
                <a class="product_name" href="{{ url('produit/'.$produit->id) }}"><h3>{{$produit->titre}}</h3></a>
                <div class="buttom">
                <p><button><a class="addtocart" data-id="{{$produit->id}}" data-name="{{$produit->titre}}" data-price="{{$produit->prix}}" data-url="{{ url('produit/'.$produit->id) }}" >add to cart</a></button></p>
              </div>
              </div>
          </main>
          @endforeach
        </div>
        </div>
        <div class="clear"></div>
      </div>
@endsection
