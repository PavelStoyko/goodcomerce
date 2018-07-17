<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'business_id',
        'name'
    ];




    public function businesses()
    {
        return $this->belongsToMany('App\Business', 'business_tag', 'tag_id', 'business_id');
    }
}
