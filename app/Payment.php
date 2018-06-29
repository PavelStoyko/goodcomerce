<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'cost',
        'payment_date',
        'type'
    ];

    public function order()
    {
        return $this->hasOne('App\Order');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
