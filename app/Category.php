<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'detail'];

    public function blog(){

        return $this->hasMany(Blog::class);
    }

}
