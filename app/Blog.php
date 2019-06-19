<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = ['judul', 'slug', 'content', 'user_id', 'category_id', 'topbar'];

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
