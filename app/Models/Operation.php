<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'title' ,'en_title','image', "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}

