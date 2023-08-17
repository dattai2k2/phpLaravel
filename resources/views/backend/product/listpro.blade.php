@extends('backend.nav')
@section('content')
    @if(Session::has('success'))
    <div class="alert alert-success col" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
<div class="row">
    <div class="col">
        <div class="x_content">
            <a href="product/create"><button type="button" class="btn btn-primary">ADD NEW PRODUCT</button></a>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Size</th>
                    <th>Nhãn hiệu</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                   
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->pro_name }}</td>
                            <td>{{ $product->catname->cat_name }}</td>
                            <td>{{ $product->sizename->size_name }} - {{ $product->sizename->size_number }}</td>
                            <td>{{ $product->brandname->brand_name }}</td>
                            <td><img src="../public/images/{{ $product->image }}" style="width:100px"></td>
                            <td>{{ $product->price }}</td>
                           
                            <td>{!! $product->description !!}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="/shopping/admin/product/edit/{{ $product->id }}">
                                    <i class="fa fa-pencil-square-o"></i> Sửa</a>
                                <a href="/shopping/admin/product/delete/{{ $product->id }}" onclick="return confirm('Bạn chắc chắn muốn xóa bản ghi này không?');" class="xoa">
                                    <i class="fa fa-trash-o"></i> Xóa</a>
                                <a href="/shopping/admin/product/viewimage/{{ $product->id }}">
                                    <i class="fa fa-plus"></i> Thêm ảnh</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$data->appends(request()->all())->links()}}
            <a href="product/create"><button type="button" class="btn btn-primary">ADD NEW PRODUCT</button></a>
        </div>
    </div>
</div>
@stop