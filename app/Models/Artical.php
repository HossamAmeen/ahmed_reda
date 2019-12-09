<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Artical extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title' , 'description', 'en_title' , 'en_description', 'image' , "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getEnSubDesAttribute()
    {
        // return "test";
        return  Str::limit($this->en_description , 150 , "");
    }
}
