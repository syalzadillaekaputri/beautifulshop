<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $table = 'transaksi';
    
    protected $fillable = [
        'user_id','total','tanggal','status'
    ];
    public function customer(){
        return $this->hasOne('App\User','id','user_id');
    }
    public function detail(){
        return $this->hasMany('App\TransaksiDetail','id','transaksi_id');
    }
}
