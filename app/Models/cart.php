<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{   

    protected $products="carts";
    protected $fillable=['p_id',"p_mass","u_id","cart_id","c_status"];
    use HasFactory;
}
