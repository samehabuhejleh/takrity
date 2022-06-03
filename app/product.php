<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['image','title','description'];




    public function product1()
   {
       return $this->belongsTo('App\product1');
   }
}
