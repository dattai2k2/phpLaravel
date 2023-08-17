<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $table = 'category';

    protected $fillable = ['cat_name','status'];

    function getallcat(){
        return $data = Category::all();
    }
    function getselectcat(){
        return $data = Category::all() -> where('status','=','1');
    }
    public function products(){
        return $this->hasMany(Product::class,'cat_id','id');
    }
    public function catname(){
        return $this->hasOne(Category::class,'id','cat_id');
    }
}
?>