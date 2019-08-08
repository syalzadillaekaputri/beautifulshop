<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'cart';
    
    protected $fillable = [
        'user_id','produk_id','qty'
    ];
    public function produk(){
        return $this->hasOne('App\produk','id','produk_id');
    }
}
