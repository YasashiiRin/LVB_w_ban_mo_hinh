<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Producttable extends Model
{
    use HasFactory;
    protected $table ="products";
    public function product_type(){
        return $this->belongsTo('App\Models\ProductType','id_type','id');
    }
    public function bill_detail(){
        return $this-> hasMany('App\Models\BillDetail','id_product','id');
    }
}
class Product extends Authenticatable
{
    use  HasFactory, Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    
    protected $fillable = [
        'name',
        'id_type',
        'description',
         'unit_price',
         'promotion_price',
         'image',
         'typeB',
    ];
}
