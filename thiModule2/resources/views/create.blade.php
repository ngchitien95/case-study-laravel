@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <h1 style="color:blue;"> Thêm Mới Liên Lạc</h1>
            <br>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-2">
                        <label>Nhập Họ Liên lạc</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="surname" placeholder="Nhập Họ Liên Lạc">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label>Nhập Tên Liên lạc</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="name" placeholder="Nhập Tên Liên Lạc">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2">
                        <label>Nhập số điện thoại</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2">
                        <label>Nhập email</label>
                    </div>
                    <div class="col-10">
                        <input type="mail" class="form-control" name="email" placeholder="Nhập Email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2">
                        <label>Nhập Địa chỉ</label>
                    </div>
                    <div class="col-10">
                        <input type="mail" class="form-control" name="address" placeholder="Nhập Địa chỉ">
                    </div>
                </div>

                <button type="submit" class="btn btn-danger">XÁC NHẬN</button>
            </form>
        </div>
    </div>
</div>


@endsection
