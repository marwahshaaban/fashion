<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $fillable = ["bill", "product",'type','amount', "created_at", "updated_at" ];
    protected $casts = [
        'finish' => 'date'
    ];
}
