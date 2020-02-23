<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>

<div class="site-wrap">



  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <!-- .site-mobile-menu -->


  <div class="site-navbar-wrap js-site-navbar bg-white">

    <div class="container">
      <div class="site-navbar bg-light">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="{{ route('trang-chu') }}" class="font-weight-bold text-uppercase">COFFEE</a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">

                <li class="active"><a href="{{ route('cf') }}">CÀ PHÊ</a></li>
                  <li class="has-children">
                    {{-- <a href="about.html">Loại sản phẩm</a> --}}
                    <ul class="dropdown arrow-top">
                      <li><a href="testimonials.html">Cà phê</a></li>
                      <li><a href="gallery.html">Máy pha cà phê</a></li>
                      {{-- <li><a href="faq.html">FAQ</a></li>
                      <li><a href="why-choose-us.html">Why Choose Us</a></li> --}}
                      {{-- <li class="has-children">
                        <a href="#">Sub Menus</a>
                        <ul class="dropdown">
                          <li><a href="testimonials.html">Testimonials</a></li>
                          <li><a href="gallery.html">Gallery</a></li>
                          <li><a href="why-choose-us.html">Why Choose Us</a></li>
                        </ul>
                      </li> --}}
                    </ul>
                  </li>
                  <li><a href="{{ route('quan-cf-ngon') }}">QUÁN CÀ PHÊ NGON</a></li>
                  <li><a href="{{ route('bai-viet') }}">BÀI VIẾT</a></li>
                  <li><a href="{{ route('lien-he') }}">LIÊN HỆ</a></li>
                  <li><a href="{{ route('show-cart.cart') }}">GIỎ HÀNG</a></li>
                  <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('keyword.search')}}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                  @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập')  }} </a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest



                  {{-- <a href="javascript:void(0);" class="top-cart-info-count">0</a>
                  <a href="javascript:void(0);" class="top-cart-info-value">0 ₫</a> --}}
                  {{-- <li><a href="contact.html"><span class="d-inline-block bg-primary text-white btn btn-primary">Get Started</span></a></li> --}}


                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
