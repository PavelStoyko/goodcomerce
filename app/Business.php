<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo', 'name', 'description', 'cost', 'discount', 'interest', 'roi', 'repayment'
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
}
