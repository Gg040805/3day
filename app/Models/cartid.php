<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartid extends Model
{   
    protected $table="cartid";
    protected $fillable=["c_id"];
    use HasFactory;
}
