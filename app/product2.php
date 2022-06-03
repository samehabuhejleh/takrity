<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product2 extends Model
{
    protected $fillable=['user_id2','image2','title2','description2'];




    public function product1()
    {
        return $this->hasOne('App\product1','user_id2');
    }

    public function product3()
    {
        return $this->belongsTo('App\product3');
    }
}
