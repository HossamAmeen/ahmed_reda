<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class News extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title' , 'description', 'en_title' , 'en_description', 'image' , "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function  getSubDesAttribute()
    {
      return  strip_tags(html_entity_decode($this->en_description));
       
       
    }
}
