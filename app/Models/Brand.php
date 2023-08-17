<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model{
    protected $table = 'brand';

    protected $fillable = ['brand_name','status'];

    function getallbrand(){
        return $data = Brand::all();
    }
    function getselectbrand(){
        return $data = Brand::all() -> where('status','=','1');
    }
    public function brandname(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
}
?>