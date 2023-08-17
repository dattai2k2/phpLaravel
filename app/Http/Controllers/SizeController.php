<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function index(){
        $datasize = new Size;
        $sizes = $datasize -> getallsize();
        return view('backend.size.create', compact('sizes'));
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

        Size::create($data);
        return back();
        
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $size = Size::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.size.edit', compact('size'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $size = Size::findOrFail($id);
        // dd($category);
        if(isset($request['status'])){
            $request['status']=1;
        }else{
            $request['status']=0;
        }
        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        //dd($data);
        Size::where('id', $id)->update([ 'size_name' => $data['size_name'],'size_number' => $data['size_number'],'status' => $data['status'] ]);
        return redirect()->action([SizeController::class, 'index']);

    }
    public function delete($id){
        $size = Size::findOrFail($id);
        $size->delete();
        return back();
    }
}
?>