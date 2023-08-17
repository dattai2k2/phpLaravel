<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $datacat = new Category;
        $categorys = $datacat -> getallcat();
        // $categorys = Category::all();
        return view('backend.category.category', compact('categorys'));
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

        Category::create($data);
        return back();
        
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $category = Category::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $category = Category::findOrFail($id);
        // dd($category);
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        //dd($data);
        Category::where('id', $id)->update([ 'cat_name' => $data['cat_name'],'status' => $data['status'] ]);
        return redirect()->action([CategoryController::class, 'index']);

    }
    public function delete($id){
        $category = category::findOrFail($id);
        $category->delete();
        return back();
    }
}
?>