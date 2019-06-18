<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['judul', 'slug', 'content', 'user_id', 'category_id', 'topbar'];

    public function category(){

        return $this->hasMany(Category::class);
    }
}
