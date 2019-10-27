<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'name' , "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
