<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        $databrand = new Brand;
        $brands = $databrand -> getallbrand();
        return view('backend.brand.create', compact('brands'));
    }
    public function addnew(Request $request){
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        // dd($request['status']);
        $data = $request->all();
        // dd($data);

        Brand::create($data);
        return back();
        
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $brand = Brand::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $brand = Brand::findOrFail($id);
        // dd($category);
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        //dd($data);
        Brand::where('id', $id)->update([ 'brand_name' => $data['brand_name'],'status' => $data['status'] ]);
        return redirect()->action([BrandController::class, 'index']);

    }
    public function delete($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return back();
    }
}
?>