<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    public $table = 'transaksi_detail';
    
    protected $fillable = [
        'transaksi_id','qty','harga','subtotal','product_id'
    ];
    public function produk(){
        return $this->hasOne('App\produk','id','product_id');
    }
    public function transaksi(){
        return $this->hasOne('App\Transaksi','id','transaksi_id');
    }
}
