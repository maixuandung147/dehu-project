<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table ='suppliers';

    protected $fillable = [
    	'name','telephone','address','email'
    ];

    public function products()
    {
    	return $this->hasMany('App\Model\Product','supplier_id','id');
    }
    
    public $timestamps = false;
}
