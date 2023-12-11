<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Admin extends Authenticatable
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
        'full_name',
        'email',
        'password'
    ];
}
class Admintable extends Model
{
    use HasFactory;
    protected $table ="admin";
    public function User(){
        return $this-> hasMany('App\Models\Users','id_admin','id');
    }
    public function product(){
        return $this-> hasMany('App\Models\Product','id');
    }
}
