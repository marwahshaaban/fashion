<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Events\ProductCreated;

class Product extends Model
{
    //
    protected $dispatchesEvents = [
        'created' => ProductCreated::class
    ];
}
