<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    public $table = 'kontak';
    
    protected $fillable = [
        'nama', 'email', 'nohp', 'pesan'];
}
