<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Customertable extends Model
{
    use HasFactory;
    protected $table ="customers";
     public function bill(){
        return $this->hasMany('App\Models\Bill','id_customer','id');
    }
}
class Customer extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    
    protected $fillable = [
        'name',
        'gender',
        'email',
         'address',
         'phone_number',
         'note',
    ];
}
