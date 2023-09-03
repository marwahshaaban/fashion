<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ["user_id", "name",'type','num', "created_at", "updated_at" ];
}
