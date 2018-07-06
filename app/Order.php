<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'business_id',
        'user_id',
        'cost',
        'interest',
        'terms',
        'funding',
        'investing',
        'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function business()
    {
        return $this->belongsTo('App\Business');
    }


}
