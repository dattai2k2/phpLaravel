<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $data = Product::search()->paginate(10);
        $catname = $datacat -> catname();
        $sizename = $datasize -> sizename();
        $brandname = $databrand -> brandname();
        
        return view('backend.product.listpro', compact('data','categorys','sizes','brands','catname','sizename','brandname'));
    }
    public function create(){
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        return view('backend.product.create', compact('categorys','sizes','brands'));
    }
    function addnew(Request $request){
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $strrandom = (\Str::random(10));
        $imageName = time().$strrandom.'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        
        $data = $request->all();
        $data['image']=$imageName;
        // dd($_POST);

        Product::create($data);
        return redirect()->action([ProductController::class, 'index']) -> with('success','them moi thanh cong');
    }
    function edit($id){
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $product = Product::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.product.edit', compact('product','categorys','sizes','brands'));
    }
    function update(Request $request,$id){
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        if(isset($request['image'])){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().$strrandom.'.'.$request->image->extension();  
         
            $request->image->move(public_path('images'), $imageName);
            // $request['image']->getPathname('imageName');
            
            $data = $request->all();
            $data['image']=$imageName;
            Product::where('id', $id)->update([ 'pro_name' => $data['pro_name'], 'cat_id' => $data['cat_id'], 'size_id' => $data['size_id'], 'brand_id' => $data['brand_id'], 'image' => $data['image'], 'price' => $data['price'], 'description' => $data['description'],'status' => $data['status'] ]);
        }
        else{
            $data = $request->all();
            Product::where('id', $id)->update([ 'pro_name' => $data['pro_name'], 'cat_id' => $data['cat_id'], 'size_id' => $data['size_id'], 'brand_id' => $data['brand_id'], 'price' => $data['price'], 'description' => $data['description'],'status' => $data['status'] ]);
        }
        
        return redirect()->action([ProductController::class, 'index']);
    }
    function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return back();
    }
}
