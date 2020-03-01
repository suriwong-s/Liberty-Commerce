<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rights extends Model
{
    protected $table = 'rights';

    public function groupe()
    {
	return $this->hasMany('App\Model\Groupe', 'rights_id', 'id');
    }
}
