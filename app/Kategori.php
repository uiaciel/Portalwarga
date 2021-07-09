<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama', 'slug', 'image', 'status'];

    
    public function newslist()
    {
        return $this->hasMany('App\Artikel');
    }
}
