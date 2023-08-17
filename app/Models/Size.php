<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Size extends Model{
    protected $table = 'size';

    protected $fillable = ['size_name','size_number','status'];

    function getallsize(){
        return $data = Size::all();
    }
    function getselectsize(){
        return $data = Size::all() -> where('status','=','1');
    }
    public function sizename(){
        return $this->hasOne(Size::class,'id','size_id');
    }
}
?>