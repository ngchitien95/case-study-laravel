@extends('welcome')
@section('content')
<br>
<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-8 col-sm-8 blog-posts">
                            @foreach ($quancfngon as $quan)
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" height="200" width="200" alt="" src="{{$quan->image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="/coffeeshop/post/4017">{{ $quan->title}}</a></h2>
                                            <ul class="blog-info">
                                                {{-- <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i> 18/10/2019</li>
                                                <li><i class="fa fa-eye"></i> 0</li> --}}
                                            </ul>
                                            <p>{{ $quan->describe}}</p>
                                            <a href= "{{ route('quan-cf-ngon.show', $quan->id) }}" class="more">Đọc tiếp <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                            @endforeach
                                    {{-- <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" alt="" src="/Uploads/Photos/blog/anhquan/1976/bienhieu.jpg">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="/coffeeshop/post/4016">VẺ ĐẸP MỘT THỜI V&#192;NG SON HIỆN L&#202;N Ở TRUNG T&#194;M TH&#192;NH PHỐ NHỎ - C&#192; PH&#202; 1976</a></h2>
                                            <ul class="blog-info">
                                                <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i> 18/10/2019</li>
                                                <li><i class="fa fa-eye"></i> 0</li>
                                            </ul>
                                            <p>Qu&#225;n c&#224; ph&#234; 1976 nằm n&#233;p m&#236;nh thanh b&#236;nh giữa l&#242;ng phố thị đ&#244;ng đ&#250;c v&#224; n&#225;o nhiệt. B&#234;n ngo&#224;i xe cộ đi lại ồn &#227; nhưng b&#234;n trong qu&#225;n lại l&#224; một kh&#244;ng gian ho&#224;n to&#224;n kh&#225;c l&#224;m gợi l&#234;n những k&#237; ức đ&#227; ngủ qu&#234;n &#249;a lại v&#224;o trong t&#226;m tr&#237; mỗi người. Kh&#244;ng gian qu&#225;n vừa c&#243; khu vực trong nh&#224; với &#225;nh đ&#232;n v&#224;ng ấm &#225;p vừa c&#243; khu vực ngo&#224;i trời tho&#225;ng đ&#227;ng, thanh b&#236;nh l&#224; nơi l&#253; tưởng cho những buổi hẹn h&#242;, t&#225;n gẫu với bạn b&#232; kh&#244;ng biết thời gian.</p>
                                            <a href="/coffeeshop/post/4016" class="more">Đọc tiếp <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" alt="" src="/Uploads/Photos/blog/anhquan/t2/T2%20COFFEE%20HOUSE%20(84).jpg">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="/coffeeshop/post/4014">T2 COFFEE - KH&#212;NG GIAN RỘNG THO&#193;NG C&#217;NG KHU VUI CHƠI, T&#204;M Ở Đ&#194;U B&#194;Y GIỜ ⁉️</a></h2>
                                            <ul class="blog-info">
                                                <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i> 09/10/2019</li>
                                                <li><i class="fa fa-eye"></i> 0</li>
                                            </ul>
                                            <p>T2 Coffee nằm tr&#234;n con đường L&#234; Hồng Phong gần trung t&#226;m th&#224;nh phố Huế. Qu&#225;n c&#243; thiết kế với kh&#244;ng gian trong nh&#224; ấm &#225;p với &#225;nh đ&#232;n v&#224;ng, c&#243; điều h&#242;a l&#224; một nơi l&#253; tưởng cho những bạn đến đ&#226;y học tập, c&#242;n ngo&#224;i trời rộng r&#227;i, tho&#225;t m&#225;t.</p>
                                            <a href="/coffeeshop/post/4014" class="more">Đọc tiếp <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" alt="" src="https://greenfieldscoffee.com/Uploads/Photos/blog/anhquan/credit/IMG_6035.JPG">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="/coffeeshop/post/4013">&#119810;&#119825;&#119812;&#119811;&#119816;&#119827; &#119810;&#119822;&#119813;&#119813;&#119812;&#119812; – VIEW ĐẸP GI&#193; RẺ KH&#212;NG LẼ KH&#212;NG ĐẾN!!!</a></h2>
                                            <ul class="blog-info">
                                                <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i> 09/10/2019</li>
                                                <li><i class="fa fa-eye"></i> 0</li>
                                            </ul>
                                            <p>Credit Coffee mới mở vừa tr&#242;n một th&#225;ng nhưng c&#243; lượng kh&#225;ch kh&#225; ổn định l&#224; do gi&#225; cả hợp l&#253; th&#234;m v&#224;o đ&#243; l&#224; chổ để xe thoải m&#225;i.</p>
                                            <a href="/coffeeshop/post/4013" class="more">Đọc tiếp <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep"> --}}

                            <ul class="pagination">
                                                                <li class="active"><a href="/blog/1">1</a></li>
                                                            </ul>
                        </div>
                        <!-- END LEFT SIDEBAR -->
                        <!-- BEGIN RIGHT SIDEBAR -->
                        <div class="col-md-4 col-sm-4 blog-sidebar">
                            <!-- CATEGORIES START -->

                            <!-- CATEGORIES END -->
                            <!-- BEGIN RECENT NEWS -->
                            <h5>Thiết kế trang web</h5>
                            <h2>Mr Tiến: 0935 096 425</h2>

                            <div class="recent-news margin-bottom-10">
                                    <p>Thiết kế tận tình, giá rẻ, chu đáo, chuyên nghiệp, hiện đại.</p>

                            </div>
                            <!-- END RECENT NEWS -->
                            <hr />
                            <!-- BEGIN MOST READ -->
                            <h5>HÃY GHÉ THĂM XƯỞNG RANG CỦA CHÚNG TÔI TẠI:</h5>
                            <div class="recent-news margin-bottom-10">
                                    <p>Địa chỉ: 118 Lý Nam Đế, phường Kim Long, thành phố Huế, TT Huế, Việt Nam
                                    </p>
                            </div>
                            <!-- END MOST READ -->
                        </div>
                        <!-- END RIGHT SIDEBAR -->
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>

@endsection
