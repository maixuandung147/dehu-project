<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    protected $fillable = [
        'name','quantity','price','supplier_id','category_id','ram','vga','operating_system','cpu','guarantee','note','description','sales_volume','total_rating','total_number_point'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Model\Category','category_id','id');
    }

    public function supplier()
    {
    	return $this->belongsTo('App\Model\Suppliers','supplier_id','id');
    }

    public function order_details()
    {
    	return $this->hasMany('App\Model\OrderDetail','product_id','id');
    }

    public function promotions()
    {
    	return $this->hasMany('App\Model\Promotion','product_id','id');
    }

    public function product_images()
    {
        return $this->hasMany('App\Model\ProductImage','product_id','id');
    }
    
    public $timestamps = false;
}
