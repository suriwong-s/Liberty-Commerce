<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produit;
use App\Model\catalogue;
use Session;
use App\Model\storeCart;

class ProduitController extends Controller
{
    

    public function produit(Request $request, $id)
    {

		$produit = Produit::where( [ 'id' => $id ] )->get();
		

		return view('content.produit', compact('produit'));
		
	}

    
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $panier = session()->get('panier');
 
            $panier[$request->id]["quantity"] = $request->quantity;
 
            session()->put('panier', $panier);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $panier = session()->get('panier');
 
            if(isset($panier[$request->id])) {
 
                unset($panier[$request->id]);
 
                session()->put('panier', $panier);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }



    
}
