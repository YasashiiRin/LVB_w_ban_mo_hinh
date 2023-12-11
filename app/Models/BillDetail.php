<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class BillDetail extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    
    protected $fillable = [
        'id_product',
        'quantity',
        'unit_price',
         'unit_price',
    ];
}
class BillDetailtable extends Model
{
    use HasFactory;
    protected $table ="bill_detail";
    public function product(){
        return $this->belongsTo('App\Models\Product','id');
    }
     public function bill(){
        return $this->belongsTo('App\Models\Bill','id_bill','id');
    }
}
