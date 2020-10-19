<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table ='promotions';

    protected $fillable = ['user_id','product_id','price','start_date','end_date','status'];
    
    public function product(){

    	return $this->belongsTo('App\Model\Product','product_id','id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }

    public $timestamps = false;
}
