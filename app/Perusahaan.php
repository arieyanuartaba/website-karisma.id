<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['namaperusahaan', 'deskripsi', 'logo'];

    public function getRouteKeyName()
    {
        return 'namaperusahaan';
    }

    public function produks(){

        return $this->hasMany(Produk::class);
    }
}
