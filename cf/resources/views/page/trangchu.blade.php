
@extends('layouts.app')
@section('content')

<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('neos/images/anhbia.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="font-secondary  font-weight-bold text-uppercase">Để có những gói cà phê NGON, chúng tôi chăm chút từng mẻ rang. </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('neos/images/anhbia1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
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

  <div class="slant-1"></div>

  <div class="site-section first-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center" data-aos="fade">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">NƠI KHỞI ĐẦU CHO NHỮNG THÀNH CÔNG</span>
          <h2 class="site-section-heading text-uppercase text-center font-secondary">UY TÍN TẠO NÊN THƯƠNG HIỆU</h2>
        </div>
      </div>
      <div class="row border-responsive">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
          <div class="text-center">
            <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
            <h3 class="text-uppercase h4 mb-3">Increase Revenue</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center">
            <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
            <h3 class="text-uppercase h4 mb-3">Analytics</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center">
            <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
            <h3 class="text-uppercase h4 mb-3">3 Years Experience</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center">
            <span class="flaticon-box display-4 d-block mb-3 text-primary"></span>
            <h3 class="text-uppercase h4 mb-3">Free Package</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach ($new_productType1 as $type)

<div class="site-half">
  <div class="img-bg-1" style="background-image: url({{ $type->image}});" data-aos="fade"></div>
  <div class="container">
    <div class="row no-gutters align-items-stretch">

      <div class="col-lg-5 ml-lg-auto py-5">
        <span class="caption d-block mb-2 font-secondary font-weight-bold">{{ $type->name}}</span>
        <p>{{$type->description}}</p>
        <h2 class="site-section-heading text-uppercase font-secondary mb-5"> <a href="">Xem toàn bộ sản phẩm </a>  </h2>

        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p> --}}
      </div>


    </div>
  </div>
</div>
@endforeach


<div class="site-section">
    <div class="container">
      <div class="row mb-5">
        {{-- <div class="col-md-12" data-aos="fade">
          <h2 class="site-section-heading text-center text-uppercase">Recent Blog Posts</h2>
        </div> --}}
      </div>
      <div class="row">

        @foreach ($new_product as $product)

        <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">{{ $product->name}}</a></h2>
              <span class="d-block mb-3" style="color:red" >Giá  {{ $product->promotion_price}} &mdash; Jan. 20, 2019</span>
              <p>{{ $product->description}}</p>
              <p><a href="#">Tìm hiểu thêm</a></p>
            </div>
          </div>
        </div>

        @endforeach


        {{-- <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
              <p><a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
              <p><a href="#">Read More</a></p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>



@foreach ($new_productType2 as $type)


<div class="site-half block">
  <div class="img-bg-1 right" style="background-image: url('{{asset('neos/images/img_5.jpg')}}');" data-aos="fade"></div>
  <div class="container">
    <div class="row no-gutters align-items-stretch">
      <div class="col-lg-5 mr-lg-auto py-5">
        <span class="caption d-block mb-2 font-secondary font-weight-bold">{{ $type->name}}</span>
        <p>{{$type->description}}</p>
        <h2 class="site-section-heading text-uppercase font-secondary mb-5"><a href="">Xem toàn bộ sản phẩm </a></h2>

        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p> --}}
      </div>
    </div>
  </div>
</div>
@endforeach


<div class="site-section">
    <div class="container">
      <div class="row mb-5">
        {{-- <div class="col-md-12" data-aos="fade">
          <h2 class="site-section-heading text-center text-uppercase">Recent Blog Posts</h2>
        </div> --}}
      </div>
      <div class="row">

        @foreach ($new_product2 as $product)

        <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">{{ $product->name}}</a></h2>
              <span class="d-block mb-3" style="color:red" >Giá  {{ $product->promotion_price}} &mdash; Jan. 20, 2019</span>
              <p>{{ $product->description}}</p>
              <p><a href="#">Tìm hiểu thêm</a></p>
            </div>
          </div>
        </div>

        @endforeach

        </div>
      </div>
    </div>
  </div>




  <div class="site-section section-counter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p class="mb-5"><img src="{{asset('neos/images/img_1.jpg')}}" alt="Image" class="img-fluid"></p>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="site-section-heading mb-3 font-secondary text-uppercase">Free Templates By Colorlib</h2>
          <p class="mb-5">Ullam ut modi cum voluptatibus atque nulla quidem maxime enim animi cupiditate, mollitia. </p>

          <div class="row">
            <div class="col-lg-6">
              <div class="counter">
                <span class="caption">Current Downloads</span>
                <span class="number" data-number="49020">0</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="counter">
                <span class="caption">Number of Templates</span>
                <span class="number" data-number="275">0</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="site-section block-14 nav-direction-white">

    <div class="container">

      <div class="row mb-5">
        <div class="col-md-12">
          <h2 class="site-section-heading text-center text-uppercase">Testimonials</h2>
        </div>
      </div>

      <div class="nonloop-block-14 owl-carousel">


          <div class="d-block block-testimony mx-auto text-center">
            <div class="person w-25 mx-auto mb-4">
              <img src="{{asset('neos/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
            </div>
            <div>
              <h2 class="h5 mb-4">Katie Johnson</h2>
              <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
            </div>
          </div>

          <div class="d-block block-testimony mx-auto text-center">
            <div class="person w-25 mx-auto mb-4">
              <img src="{{asset('neos/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
            </div>
            <div>
              <h2 class="h5 mb-4">Jun Mars</h2>
              <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
            </div>
          </div>

          <div class="d-block block-testimony mx-auto text-center">
            <div class="person w-25 mx-auto mb-4">
              <img src="{{asset('neos/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
            </div>
            <div>
              <h2 class="h5 mb-4">Shane Holmes</h2>
              <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
            </div>
          </div>

          <div class="d-block block-testimony mx-auto text-center">
            <div class="person w-25 mx-auto mb-4">
              <img src="{{asset('neos/images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
            </div>
            <div>
              <h2 class="h5 mb-4">Mark Johnson</h2>
              <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
            </div>
          </div>

      </div>

    </div>

  </div>

  {{-- <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12" data-aos="fade">
          <h2 class="site-section-heading text-center text-uppercase">Recent Blog Posts</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
              <p><a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
              <p><a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="media-image">
            <a href="single.html"><img src="{{asset('neos/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="media-image-body">
              <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
              <p><a href="#">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  @endsection
