@extends('home')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      thông tin khách hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($customers as $cus)

          <tr>
            <td>{{$cus->name}}</td>
            <td>{{$cus->email}}</td>
            <td>{{$cus->address}}</td>
            <td>{{$cus->phone_number}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      chi tiết sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá Sản Phẩm</th>
            <th>Tổng Tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($billdetais as $billdetai)


          <tr>

                @foreach ($products as $product)
                    @if ($billdetai->id_product === $product->id)
                     <td>{{$product->name}}</td>
                    @endif
                @endforeach

            <td>{{$billdetai->quanlitin}}</td>
            <td>{{$billdetai->unit_price}}</td>
            {{-- @foreach ($bills as $bill)
            @if ($bill->id === $billdetai->id_bill)
            <td>{{$bill->total}}</td>
            @endif

            @endforeach --}}

            <td>{{$billdetai->quanlitin * $billdetai->unit_price }}</td>
          </tr>
          @endforeach

          <tr>
            <th><u>Tổng Tiền Hoá Đơn:</u></th>
            <td></td>
            <td></td>
            @foreach ($bills as $bill)

            <td><u><b>{{$bill->total}}</b></u></td>
            @endforeach

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông Tin Giao Hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Người Nhận Hàng</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Ghi Chú</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $cus)

          <tr>
            <td>{{$cus->name}}</td>
            <td>{{$cus->address}}</td>
            <td>{{$cus->phone_number}}</td>
            <td>{{$cus->note}}</td>
          </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>




@endsection
