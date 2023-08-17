<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    // protected $table = 'orders';

    protected $fillable = ['cus_id','name','email','phone','address','order_note','status'];

    
    public function details(){
        
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
    public function cus(){
        return $this->hasOne(Customer::class,'id','cus_id');
    }
    // public function catname(){
    //     return $this->hasOne(Category::class,'id','cat_id');
    // }
}
?>