<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{

    public function orderData()
    {
        return $this->belongsTo('\Models\Client','client_id','id');
    }
}