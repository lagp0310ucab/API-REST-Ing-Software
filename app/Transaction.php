<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'order_amount', 'order_date',
    ];
    
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [];
}
