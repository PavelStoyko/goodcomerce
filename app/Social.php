<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'image',
        'url',
        'is_enabled'
    ];
}
