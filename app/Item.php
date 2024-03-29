<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders(){
        return $this->hasMany('App\Order','item_id');
    }
}
