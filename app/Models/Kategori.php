<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table="kategori";
    protected $fillable=['kategori_adi','slug'];
    public function urunler(){
        return  $this->hasMany('App\Models\Urun');
    }
}
