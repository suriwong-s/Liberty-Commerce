<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier_Produit extends Model
{
    protected $table = 'panier_produit';

    public function panier()
    {
        return $this->belongsTo('App\Model\Panier');
    }

    public function produit()
    {
        return $this->belongsTo('App\Model\Produit');
    }
}
