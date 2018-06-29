<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'code',
        'payment_id',
        'status',
        'cost',
        'interest_cost',
        'system'
    ];

    public function payment()
    {
        return $this->hasOne('App\Payment');
    }


}
