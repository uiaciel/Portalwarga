<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'favicon',
        'logo',
        'site_name',
        'description',
        'keywords',
        'footer_right',
        'footer_left',
    ];
}
