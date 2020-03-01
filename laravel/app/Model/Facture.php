<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'facture';

    public function panier()
    {
        return $this->belongsTo('App\Model\Panier');
    }
}
