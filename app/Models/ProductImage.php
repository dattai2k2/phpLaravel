<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Productimage extends Model{
    protected $table = 'productimg';

    protected $fillable = ['pro_id','image'];

    // function getselectproductimg(){
    //     return $dataproimg = Productimage::all()-> where('pro_id')->get($id);
    // }
}
?>