<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';

    public function produit()
    {
    	return $this->hasMany('App\Model\Produit');
    }

}
