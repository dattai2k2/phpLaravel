@extends('layouts.main')
@section('content')
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
        @foreach($orders as $key => $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->created_at->format('d-m-Y')}}</td>
            <td>{{$totalprice}}</td>
            <td><a href="{{route('order.detail',$order->id)}}" class="btn btn-success">Xem</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop