<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Model\Produit;
use App\Model\Order;
use App\Model\Panier;
use App\Model\Panier_Produit;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class PanierController extends Controller
{

     public function panier()
    {
        return view('content.panier');
    }

     public function valideOrder(Request $request)
    {
        
    $titre = $request['titre'];
    $prixtotal = $request['prixtotal'];
    $qty = $request['qty'];
    
    $data=array('titre'=>$titre,"prixtotal"=>$prixtotal,"qty"=>$qty);
    DB::table('order')->insert($data);

    echo "Confirm order successfully.";
    }



     
}
