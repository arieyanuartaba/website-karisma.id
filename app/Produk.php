<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['produk', 'deskripsi', 'perusahaan_id'];

    public function perusahaan(){

        return $this->belongsTo(Perusahaan::class);
    }
}
