<?php

namespace App;

use Collective\Html\HtmlFacade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo',
        'name',
        'description',
        'cost',
        'discount',
        'interest',
        'roi',
        'repayment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function scopeSelectData($query)
    {
        return $query->select(
            'businesses.*',
            DB::raw("
             (
                select businesses.cost - IF(SUM(payments.cost), SUM(payments.cost), 0) from payments join orders on orders.id = payments.order_id where orders.business_id = businesses.id 
             ) as credit")
                    )->having('credit', '>', 0);
    }

    public function getPhotoAttribute($value)
    {
        return $value ? asset($value) : null;
    }
}
