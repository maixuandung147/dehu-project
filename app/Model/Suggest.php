<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table ='suggests';

    protected $fillable = ['user_id','username','email','telephone','name_product','quantity','status','content'];
    
    public function user(){
   		return $this->belongsTo('App\User','user_id','id');
    }
    
    public $timestamps = false;
}
