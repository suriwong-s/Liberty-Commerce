<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $table = 'groupe';

    public function users()
    {
	return $this->hasMany('App\User', 'groupe_id', 'id');
    }
}
