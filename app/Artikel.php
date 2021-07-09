<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_user',
        'judul',
        'slug',
        'detail',
        'image',
        'id_kategori',
        'status',
        'headline',
        'dibaca',
      
    ];

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }
    
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class)->whereNull('parent_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function dibaca()  {

        // assume you have a clicks  field in your DB
    
         $this->dibaca = $this->dibaca + 1;
         $this->save();
    
    }
}
