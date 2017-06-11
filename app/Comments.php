<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Moderatable için use
use Hootlex\Moderation\Moderatable;

class Comments extends Model
{
    // Moderatable durumu ile yorumları onaylayıp/onaylanmayacağı özelliği ekleniyor
    use Moderatable;

    protected $table = "comments";

    //Doldurulabilecek alanlar
    protected $fillable = [
        'post_id', 'content', 'author',
    ];
}
