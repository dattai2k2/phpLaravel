@extends('backend.nav')
@section('content')
<div class="row">
    <div class="col">
        <div class="x_content">
            <h1>{{ $product->pro_name }}</h1>
            <a href="../"><button type="button" class="btn btn-primary">LIST PRODUCT</button></a>
            <form class="form-label-left input_mask" method="post" enctype="multipart/form-data" action="addimage/{{$product->id}}" >
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <div class="card">
                        <input type="file" id="image" name="image[]" multiple>
                        <img src="" alt="" style="width: 300px;">
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-success" name="addimage">Submit</button>
            </form>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Ngày tạo</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($productimgs as $productimg)
                        <tr>
                            <td>{{ $productimg->id }}</td>
                            <td>{{ $product->pro_name }}</td>
                            <td><img src="../../../public/images/{{ $productimg->image }}" style="width:200px"></td>
                            <td>{{ $productimg->created_at }}</td>
                            <td>
                                <a href="/shopping/admin/product/viewimage/delete/{{ $product->id }}/{{ $productimg->id }}" onclick="return confirm('Bạn chắc chắn muốn xóa bản ghi này không?');" class="xoa">
                                    <i class="fa fa-trash-o"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="../"><button type="button" class="btn btn-primary">LIST PRODUCT</button></a>
        </div>
    </div>
</div>



@stop