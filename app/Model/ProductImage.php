<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table ='product_images';

    protected $fillable = [
    	'path','product_id'
    ];

    public function product(){
    	return $this->belongsTo('App\Model\Product','product_id','id');
    }
    
    public $timestamps = false;
}
