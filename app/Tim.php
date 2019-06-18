<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $fillable = ['nama', 'jabatan', 'deskripsi', 'facebooksosmed', 'twittersosmed', 'instagramsosmed', 'linkinsosmed', 'photo', 'vitae'];

    public function getRouteKeyName()
    {
       return 'nama';
    }
}
