@extends('backend.nav')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 md-offset-2">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <form class="form-label-left input_mask" method="post" enctype="multipart/form-data" action="addnew" >
                            @csrf
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Tên Sản phẩm" value="">
                                </div>
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <select class="form-control" id="cat_id" name="cat_id">
                                        <option value="">-- Chọn Danh mục --</option>
                                        @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <select class="form-control"  id="size_id" name="size_id">
                                        <option value="">-- Chọn Cỡ --</option>
                                        @foreach($sizes as $size)
                                            <option value="{{$size->id}}" >{{$size->size_name}} - {{$size->size_number}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <select class="form-control" id="brand_id" name="brand_id">
                                        <option value="">-- Chọn thương hiệu --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="file" id="image" name="image">
                                    <img src="" alt="" style="width: 300px;">
                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá" value="">
                                </div>
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="text" class="form-control" id="saleprice" name="saleprice" placeholder="Nhập giá khuyến mãi" value="">
                                </div>
                                <div class="col-md-12 col-sm-12 x_content">
                                    <textarea class="resizable_textarea form-control" name="description"  id="summernote"></textarea>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-sm-3  control-label">Status</label>

                                    <div class="col-md-9 col-sm-9 ">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="status" id="status">Show/Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group row">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <a href="{{url('admin/product')}}"><button type="button" class="btn btn-danger">Return</button></a>
                                        <button type="submit" class="btn btn-success" name="addnew">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop