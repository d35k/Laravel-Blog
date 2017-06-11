<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{

    //Tablomun adını özel olarak belirtiyorum çünkü
    //Laravel otomatik olarak ismin sonuna 's' takısı ekliyor.
    protected $table = "posts";
    //Post'un yorumu var mı diye kontrol ettiriyorum.
    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id', 'post_id');
    }
}
