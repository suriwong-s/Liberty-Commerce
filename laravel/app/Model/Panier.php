<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';


    public function produit()
    {
        return $this->belongsToMany('App\Model\Produit');
    }

    public function facture()
    {
        return $this->hasOne('App\Model\Facture');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    

}
