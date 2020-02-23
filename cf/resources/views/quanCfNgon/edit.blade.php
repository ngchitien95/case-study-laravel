
@extends('home')
@section('admin_content')
{{-- @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif --}}

<div class="col-12 col-md-12">
    <div class="row">
       <div class="col-12"><h1>CHỈNH SỬA QUÁN CÀ PHÊ    </h1></div>
       <div class="col-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('QuanCfNgon.update', $quancfngon->id) }}">
          @csrf
          <div class="form-group">
          <label>Tiêu đề</label>
          <input type="text" class="form-control" name="title" value="{{ $quancfngon->title }}" required>
          </div>
          <div class="form-group">
             <label>Miêu tả</label>
             <input type="text" class="form-control" name="describe" value="{{ $quancfngon->describe }}" required></div>
          <div class="form-group">
             <label>Nội dung</label>
             <input type="text" class="form-control" name="content" value="{{ $quancfngon->content }}" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Photo</label>
            <img src="{{ $quancfngon->image }}" alt="" height="50px" width="50px" >
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
     </div>

          <button type="submit" class="btn btn-outline-danger">Chỉnh sửa</button>
          <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
       </form>
       </div>
      </div>
 </div>

 @endsection
