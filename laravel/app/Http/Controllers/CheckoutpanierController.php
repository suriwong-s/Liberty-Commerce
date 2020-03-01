<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use App\Model\Panier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Session;

class CheckoutpanierController extends Controller
{
    public function getcheckout()
    {
    	if (!Session::has('panier')) {
    		return view('content.panier');
    	}
    	if(isset($panier)) { 
    		$newpanier = new Panier(); 
    	return view('content.checkout');
    	}
    }
}
