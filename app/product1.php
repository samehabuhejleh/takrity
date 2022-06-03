<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product1 extends Model
{

    protected $fillable=['user_id','image','title','description'];




    public function product()
    {
        return $this->hasOne('App\product', 'user_id');
    }

    public function product2()
    {
        return $this->belongsTo('App\product2');
    }
}


