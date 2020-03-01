<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class oreder extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'titre','prixtotal', 'qty'
    ];

    public function produit()
    {
    	return $this->belongsTo('App\Model\Produit');
    }
}
