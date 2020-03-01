<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';

    protected $fillable = ['id', 'titre',  'prix', 'description', 'disponibilité', 'quantité', 'image', 'categorie_id'];


    public function panier()
    {
        return $this->belongsToMany('App\Model\Panier');
    }

    public function categorie()
    {
    	return $this->belongsTo('App\Model\Categorie', 'categorie_id');
    }


}
