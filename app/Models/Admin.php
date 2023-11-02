<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = "admin";
    protected $table = "admins";
    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'password',
        'country',
        'profile_img',
        'type',
        'status'
    ];

    /**
     * counting Admin 
    */

    public static function countAdmin($type){
       if($type == "admin"){
        $total_admin = count(Admin::all());
       }
       else{
        $total_admin = 1;
       }
        return $total_admin;
    }
}