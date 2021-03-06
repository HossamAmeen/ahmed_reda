<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'address','en_address','phone','appointment','en_appointment', "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
   
}
