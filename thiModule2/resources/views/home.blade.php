@extends('layouts.app')
@section('content')
<div class="container">
<br>
<br>
    <h2 style="color:red;">Quản Lý Danh Sách Liên Lạc</h2>
    <form action="{{route('customers.search')}}" method="get">
        <input type="search"  name="key" class="form-control" placeholder="Nhập từ khóa...">
    </form>
<a href="{{Route('customers.create')}}" class="btn btn-success"><i class="fa fa-plus-square"> Create</i></a>
@if(Session::has('successCreate'))
<p class="alert alert-info">{{ Session::get('successCreate') }}</p>
@endif


    <div class="mt-2">
        <table id="tbProduct" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $cus)
            <tr class="table table-striped">
                <td>{{$cus->surname}}</td>
                <td>{{$cus->name}}</td>
                <td>{{$cus->phone}}</td>
                <td>{{$cus->email}}</td>
                <td>{{$cus->address}}</td>

                <td>
                    <a  onclick="return confirm('Bạn đã chắc chưa?')" href="{{Route('customers.destroy',$cus->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a>

            </td>

            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

