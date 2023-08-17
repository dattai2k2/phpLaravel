<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model{
    protected $table = 'product';

    protected $fillable = ['pro_name','cat_id','size_id','brand_id','image','description','status','price'];

    function getallproduct(){
        return $data = Product::all();
    }
    public function scopeSearch($query){
        if(request('key')){
            $key = request('key');
            $query = $query->where('pro_name','like','%'.$key.'%');
        }
        if(request('cat_id')){
            $query = $query->where('cat_id',request('cat_id'));
        }
        if(request('size_id')){
            $query = $query->where('size_id',request('size_id'));
        }
        if(request('brand_id')){
            $query = $query->where('brand_id',request('brand_id'));
        }
        if(request('slider-range-value1z') && request('slider-range-value2z')){
            $min=request('slider-range-value1z');
            $max=request('slider-range-value2z');
            $query = $query->whereBetween('price',[$min,$max]);
        }
        return $query;
    }
    public function catname(){
        return $this->hasOne(Category::class,'id','cat_id');
    }
    public function sizename(){
        return $this->hasOne(Size::class,'id','size_id');
    }
    public function brandname(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
}
?>