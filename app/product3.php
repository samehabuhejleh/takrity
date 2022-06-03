<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product3 extends Model
{
    protected $fillable=['user_id3','image3','title3','description3'];


    public function product2()
    {
        return $this->hasOne('App\product2','user_id3');
    }


}
