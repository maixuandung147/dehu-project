<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';

    protected $fillable = ['name','parent_id','desription'];

    public function products()
    {
    	return $this->hasMany('App\Model\Product','category_id','id');
    }

	public function categories()
	{
		return $this->hasMany(Category::class,'parent_id','id');
	}

	public function childrenCategories()
	{
	    return $this->hasMany(Category::class,'parent_id','id')->with('categories');
	}

    public $timestamps = false;
}
