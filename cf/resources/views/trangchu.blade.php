
@extends('welcome')
@section('content')


<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('neos/images/anhbia.jpg')}});width:auto;height:300px" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="font-secondary  font-weight-bold text-uppercase">Để có những gói cà phê NGON, chúng tôi chăm chút từng mẻ rang. </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('neos/images/anhbia1.jpg')}});
    width:auto;height:300px" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade">
            <h1 class="font-secondary font-weight-bold text-uppercase">CHUYÊN NGHIỆP SẠCH SẼ GỌN GÀNG
THIẾT BỊ HIỆN ĐẠI ĐÚNG CHUẨN</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="slant-1"></div> --}}

  <div class="site-section first-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center pt-5 " data-aos="fade">
          <span class="caption d-block mb-2 font-secondary font-weight-bold ">NƠI KHỞI ĐẦU CHO NHỮNG THÀNH CÔNG</span>
          <h2 class="site-section-heading text-uppercase text-center font-secondary">UY TÍN TẠO NÊN THƯƠNG HIỆU</h2>
        </div>
      </div>
    </div>
    </div>
  </div>

  @foreach ($new_productType1 as $type)

<div class="site-half pt-5" >
    <div class="img-bg-1" style="background-image:  url('{{asset('neos/images/truyenthong.jpg')}}');" ></div>
  <div class="container">
    <div class="row no-gutters align-items-stretch">

      <div class="col-lg-5 ml-lg-auto py-5">
        <span class="caption d-block mb-2 font-secondary font-weight-bold">{{ $type->name}}</span>
        <p>{{$type->description}}</p>
      <h2 class="site-section-heading text-uppercase font-secondary mb-5"> <a href="{{route('cf.cfType',$type->id)}}">Xem toàn bộ sản phẩm </a>  </h2>
      </div>


    </div>
  </div>
</div>
@endforeach
<div class="site-section">
    <div class="container">
      <div class="row">
        @foreach ($new_product as $product)
        <div class="col-md-6 col-lg-3 mb-5"  data-aos-delay="100">
          <div class="media-image">
            <a href="single.html"><img src="{{$product->image}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="{{route('cf.show', $product->id) }}">{{ $product->name}}</a></h2>
            <span class="d-block mb-3" style="color:red" >Giá  {{ $product->promotion_price}} &mdash;
                <form action="{{route ('save_cart')}}" method="post">
                    @csrf
                    <button class="btn btn-info" >Mua</button>
                <input type="hidden" name="productid_hidden" value="{{$product->id}}">
                <input type="hidden" name="qty" value="1">
                </form>
            </span>
              <p>{{ $product->description}}</p>
              <p><a href="{{route('cf.show', $product->id) }}">Tìm hiểu thêm</a></p>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>

@foreach ($new_productType2 as $type)
<div class="site-half block">
  <div class="img-bg-1 right" style="background-image: url('{{asset('neos/images/img_5.jpg')}}');" data-aos="fade"></div>
  <img class="img-bg-1 right" height="200" width="200" alt="" src="{{$type->image}}">
  <div class="container">
    <div class="row no-gutters align-items-stretch">
      <div class="col-lg-5 mr-lg-auto py-5">
        <span class="caption d-block mb-2 font-secondary font-weight-bold">{{ $type->name}}</span>
        <p>{{$type->description}}</p>
        <h2 class="site-section-heading text-uppercase font-secondary mb-5"><a href="{{route('cf.cfType',$type->id)}}">Xem toàn bộ sản phẩm </a></h2>
      </div>
    </div>
  </div>
</div>
@endforeach
<div class="site-section">
    <div class="container">
      <div class="row">
        @foreach ($new_product2 as $product)
        <div class="col-md-6 col-lg-3 mb-5" data-aos-delay="100">
          <div class="media-image">
            <a href="single.html"><img src="{{$product->image}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="{{route('cf.show', $product->id) }}">{{ $product->name}}</a></h2>
              <span class="d-block mb-3" style="color:red" >
                Giá  {{ $product->promotion_price}} &mdash;
                <form action="{{route ('save_cart')}}" method="post">
                    @csrf
                    <button class="btn btn-info" >Mua</button>
                <input type="hidden" name="productid_hidden" value="{{$product->id}}">
                <input type="hidden" name="qty" value="1">
                </form>
            </span>
              <p>{{ $product->description}}</p>
              <p><a href="{{route('cf.show', $product->id) }}">Tìm hiểu thêm</a></p>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>

  @endsection
