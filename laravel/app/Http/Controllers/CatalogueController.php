<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Panier;
use App\Model\Produit;
use App\Model\catalogue;
use Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Session;

class CatalogueController extends Controller
{
   
    

    /*protected function saveCartItem($producto, $,$cart)
    {

            $session_code = Session::getId();

            $get_items = CartItem::where('session_code', $session_code);

            $deleted=$get_items->delete();

            $get_id = CartSession::where('session_code', $session_code)->orderBy('id', 'desc')->first();


            $CartItem = new CartItem();
            $CartItem->price = $producto->price;
            $CartItem->quantity = $producto->quantity;
            $CartItem->size = $producto->size;
            $CartItem->color = $producto->color;
            $CartItem->category = $producto->category;
            $CartItem->product_session = $producto->category.$producto->id.$producto->size.$producto->color; 
            $CartItem->product_id = $producto->id; 
            $CartItem->session_id = $get_id->id;
            $CartItem->session_code = $session_code; 
            $CartItem->save(); 


    }*/


    /*public function addToCart(Request $request, $id)
{
    $produit = Produit::find($id);
    $options = $request->except('_token', 'id', 'prix', 'quantité', 'titre');

    Cart::add(uniqid(), $produit->titre, $request->input('prix'), $request->input('quantité'), $options);

    return redirect()->back()->with('success', 'Item added to cart successfully.');
}*/
    


}

