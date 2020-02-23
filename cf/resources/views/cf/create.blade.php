
@extends('home')
@section('admin_content')


<div class="col-12 col-md-12">
    <div class="row">
       <div class="col-12">
           <h1> Thêm Mới Sản Phẩm</h1>
       </div>
       <div class="col-12">
          <form method="post" action="{{ route('cf.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
             <label>Tên sản phẩm</label>
             <input type="text" class="form-control" name="name"  placeholder="Nhập tên sản phẩm" required>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Miêu Tả</label>
              <input type="text" class="form-control" name="description" placeholder="Nhập Miêu tả" required>
          </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Nội Dung</label>
             <textarea cols="30" rows="10" class="form-control" name="content" placeholder="Nhập Nội dung"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input type="text" class="form-control" name="promotion_price" placeholder="Nhập giá sản phẩm" required>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Loại sản phẩm</label>
            <select class="form-control" name="type" id="">
                @foreach (App\ProductType::all() as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Đơn vị </label>
            <input type="text" class="form-control" name="unit" placeholder="Nhập đơn vị" required>
         </div>

          <div class="form-group">
                <label for="exampleFormControlFile1">Photo</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
         </div>
          <button type="submit" class="btn btn-danger">XÁC NHẬN</button>
          </form>
        </div>
      </div>
    </div>

    @endsection
