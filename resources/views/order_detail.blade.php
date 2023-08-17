@extends('layouts.main')
@section('content')
<h2>CHI TIẾT ĐƠN HÀNG</h2>
<div class="row">
    <div class="col-md-6">
        <h4>Thông tin khách hàng</h4>
        <hr>
        <table class="table">
            <tr>
                <td>Họ và tên</td>
                <td>{{$order->cus->name}}</td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">Email</td>
                <td>{{$order->cus->Email}}</td>
            </tr>
            <tr>
                <td scope="row">Điện thoại</td>
                <td>{{$order->cus->phone}}</td>
            </tr>
            <tr>
                <td scope="row">Địa chỉ</td>
                <td>{{$order->cus->address}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <h4>Thông tin nhận hàng</h4>
        <table class="table">
            <tr>
                <td scope="row">Họ và tên</td>
                <td>{{$order->name}}</td>
            </tr>
            <tr>
                <td scope="row">Email</td>
                <td>{{$order->email}}</td>
            </tr>
            <tr>
                <td scope="row">Điện thoại</td>
                <td>{{$order->phone}}</td>
            </tr>
            <tr>
                <td scope="row">Địa chỉ</td>
                <td>{{$order->address}}</td>
            </tr>
        </table>
    </div>
</div>
<h3>Thông tin chi tiết đơn hàng</h3>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->created_at->format('d-m-Y')}}</td>
            <td>{{$totalprice}}</td>
            <td>
                @if($order->status ==0)
                <span class="label label-danger">Chưa xác nhận</span>
                @elseif($order->status ==1)
                <span class="label label-info">Đã xác nhận</span>
                @elseif($order->status ==2)
                <span class="label label-primary">Đang giao hàng</span>
                @elseif($order->status ==3)
                <span class="label label-success">Đã nhận hàng</span>
                @elseif($order->status ==4)
                <span class="label label-success">Đã huỷ</span>
                @endif
            </td>
        </tr>
    </tbody>
</table>
<h3>Thông tin chi tiết sản phẩm</h3>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->details as $item)
        <tr>
            <td>{{$item->prod->pro_name}}</td>
            <td scope="row"><img src="{{url('public/images')}}/{{$item->prod->image}}" alt="" width="100"></td>
            
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity * $item->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop