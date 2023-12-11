<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Bill extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    
    protected $fillable = [
        'date_order',
        'total',
         'payment',
         'note',
    ];
}
class Billtable extends Model
{
    use HasFactory;
    protected $table ="bills";
     public function bill_detail(){
        return $this->hasMany('App\Models\BillDetail','id_bill','id');
    } public function customer(){
        return $this->belongTo('App\Models\Customer','id_customer','id');
    }
}
