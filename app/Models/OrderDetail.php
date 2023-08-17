<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model{
    protected $table = 'order_detail';

    protected $fillable = ['order_id','pro_id','quantity','price'];
    public $timestamps = false;
    public function prod(){
        return $this->hasOne(Product::class,'id','pro_id');
    }
}
?>