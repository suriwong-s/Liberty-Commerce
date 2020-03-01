<?php

namespace App;
use Cache;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';

    public function isOnline()
    {
        return Cache::has('user-is-online-'.$this->id);
    }

    public function panier()
    {
        return $this->hasMany('App\Model\Panier', 'users_id', 'id');
    }

    public function facture() {
        return $this->hasManyThrough('App\Model\Facture', 'App\Model\Panier', 'users_id');
    }

    public function groupe()
    {
        return $this->belongsTo('App\Model\Groupe');
    }

    public function isAdmin() 
    {

        return $this->groupe()->with('users')->where('groupe_name', 'admin')->exists();
    
    }

     public function checkout()
    {
        return $this->hasMany('App\Model\Checkout');
    }

}
