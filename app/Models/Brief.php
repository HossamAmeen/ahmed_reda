<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = ['title' , 'email' ,
                         'address' ,'description', 'descriptionPoint' , 'phone' ,  'appointment' ,
                         'phone2' ,'facebook' , 'video' , 'twitter' ,'instagram' ];
    
}
