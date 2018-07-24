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
        'targetMarket',
        'cost',
        'discount',
        'interest',
        'roi',
        'repayment',
        'short_description'
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

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'business_tag', 'business_id', 'tag_id');
    }

    public function scopeSelectData($query)
    {
        return $query->select(
            'businesses.*',
            DB::raw("
             (
                select businesses.cost - IF(SUM(orders.cost), SUM(orders.cost), 0) from orders where orders.business_id = businesses.id 
             ) as credit")
        );
//        )->having('credit', '>', 0);
    }

    public function getPhotoAttribute($value)
    {
        return $value ? asset($value) : null;
    }

    public static function getActiveCount($tag = null)
    {

        $result = DB::select("select count(id) as businesses_count from (select businesses.id,
         ( select businesses.cost - IF(SUM(payments.cost), SUM(payments.cost), 0) from payments join orders on orders.id = payments.order_id where orders.business_id = businesses.id ) as credit 
         from businesses "
         . ($tag
            ? "join business_tag on business_tag.business_id = businesses.id and business_tag.tag_id = (select id from tags where `name` = '{$tag}') "
            : '') .

         ") as businesses_temp");
//         "having credit > 0) as businesses_temp");

        return $result[0]->businesses_count;

    }

    public static function getMaxPrice($id)
    {
        $maxPrice = DB::select("SELECT cost as maxPrice FROM businesses where id=$id;");
        $maxPrice = $maxPrice[0]->maxPrice;
        return $maxPrice;
    }

    public static function ordersFunding($id){
        $allOrdersCost = DB::select("Select SUM(cost) as allOrdersCost from orders where business_id=$id");
        $allOrdersCost = $allOrdersCost[0]->allOrdersCost;
        return (int)$allOrdersCost;
    }
}
