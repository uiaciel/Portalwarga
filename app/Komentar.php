<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Komentar extends Model
{
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'artikel_id', 'parent_id', 'detail'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Komentar::class, 'parent_id');
    }
}
