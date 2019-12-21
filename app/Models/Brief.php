<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = ['title' ,'en_title' , 'email' ,'youtube',
                         'address' ,'description','en_description','home_description','en_home_description', 'descriptionPoint' , 'phone' ,  'appointment' ,
                         'phone2' ,'facebook' , 'video' ,'video2', 'twitter' ,'instagram' ];

}
