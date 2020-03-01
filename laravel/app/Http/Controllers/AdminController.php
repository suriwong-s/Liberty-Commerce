<?php

namespace App\Http\Controllers;

use DB;
use App\Model\Produit;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function form()
    {
        $count = 0;
        $users= User::all();
        foreach($users as $user) {
            if($user->isOnline()) {
                $count++;
            }
        }
        return view('admin/admin', compact('users'));
    }

    public function NewProduct(Request $request)
    {
	$titre = $request->input('titre');
	$description = $request->input('description');
	$prix = $request->input('prix');
	$image = $request->input('image');
	$quantite = $request->input('quantite');

	$data=array('titre'=>$titre,"description"=>$description,"prix"=>$prix,"image"=>$image,"quantite"=>$quantite);
	DB::table('produit')->insert($data);

	echo "Product inserted successfully.";
    }

    public function updateproduct(Request $request, $id)
    {
        $produit = Produit::where( [ 'id' => $id ] )->get();


        return view('admin.updateproduct')->with('produit', $produit);
    }


    public function update(Request $request, $id)
    {
        
    $produit = Produit::where( [ 'id' => $id ] )->update();

    $quantite = $request->update('quantite');
    
    $data=array("quantite"=>$quantite);
    DB::table('produit')->update($data);

    echo "Quantity updated successfully.";
    }

    public function ModifyQTY(Request $request)
    {
        
    $quantite = $request->input('quantite');
    
    DB::table('produit')->update($quantite);

    echo "Quantity updated successfully.";
    }


}