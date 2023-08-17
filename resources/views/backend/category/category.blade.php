@extends('backend.nav')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="category/addnew" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Category Name" name="cat_name" id="cat_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <label class="col-md-3 col-sm-3  control-label">Status</label>

                                    <div class="col-md-9 col-sm-9 ">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="status" id="status">Show/Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success" name="addnew">Submit</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>List Category</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Create date</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorys as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->cat_name }}</td>
                                    <td>{{ $category->status }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <a href="/shopping/admin/category/edit/{{ $category->id }}">
                                            <i class="fa fa-pencil-square-o"></i> Sửa</a>
                                        <a href="/shopping/admin/category/delete/{{ $category->id }}" onclick="return confirm('Bạn chắc chắn muốn xóa bản ghi này không?');" class="xoa">
                                            <i class="fa fa-trash-o"></i> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop