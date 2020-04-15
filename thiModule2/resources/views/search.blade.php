
@extends('layouts.app')
@section('content')
<div class="container">
<br>
<br>
<h2 style="color:red;" >Kết quả tìm kiếm</h2>
<br>
<h5>Đã tìm thấy {{ $customers->count() }} Liên lạc</h5>
<br>
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
                    {{-- <a href="{{Route('admin.edit',$cus->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a> --}}
                    <a href="" class="btn btn-primary" ><i class="fa fa-trash"></i></a>
            </td>

            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

