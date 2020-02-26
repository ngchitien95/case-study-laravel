@extends('welcome')
@section('content')

<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-8 col-sm-8 blog-item">
                        <h2><a href="#">{{$baiViet->title}}</a></h2>
                            <ul class="blog-info">
                                {{-- <li><i class="fa fa-user"></i> Thảo</li> --}}
                            <li><i class="fa fa-calendar"></i> {{$baiViet->created_at}}</li>
                                {{-- <li><i class="fa fa-eye"></i> 0</li> --}}
                            </ul>

                            <img src="{{$baiViet->image}}" height="200" width="200" alt="">


                        <p><span style="color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: bold;">{{$baiViet->content}}</a></span><br></p>
                        </div>
                        <!-- END LEFT SIDEBAR -->
                        <!-- BEGIN RIGHT SIDEBAR -->
                        <div class="col-md-4 col-sm-4 blog-sidebar">
                            <!-- CATEGORIES START -->

                            <!-- CATEGORIES END -->
                            <!-- BEGIN RECENT NEWS -->
                            {{-- <h2>Mới hơn</h2>
                            <div class="recent-news margin-bottom-10">
                                        <div class="row margin-bottom-10">
                                            <div class="col-md-4">
                                                <img class="img-responsive" alt="" src="/Uploads/Photos/blog/anhquan/LAGARE/1.jpg">
                                            </div>
                                            <div class="col-md-8 recent-news-inner">
                                                <h3><a href="/coffeeshop/post/4017">MỘT CH&#218;T MƠ MỘNG C&#217;NG VỚI LA GARE CAFE - QU&#193;N C&#192; PH&#202; MANG PHONG C&#193;CH CỔ ĐIỂN PH&#193;P</a></h3>
                                                <p>Nằm tr&#234;n con đường Phan Chu Trinh, La Gare Cafe như một nốt nhạc ng&#226;n nhẹ nh&#224;ng giữa th&#224;nh phố đ&#244;ng ...</p>
                                            </div>
                                        </div>
                            </div> --}}
                            <!-- END RECENT NEWS -->
                            <hr />
                            <!-- BEGIN MOST READ -->
                        <h2>Loại sản phẩm</h2>
                            <div class="recent-news margin-bottom-10">
                                @foreach ($productType as $product)
                                        <div class="row margin-bottom-10">
                                            <div class="col-md-3">
                                            {{-- <img class="img-responsive" alt="" src="{{$product->image}}"> --}}
                                            </div>
                                            <div class="col-md-9 recent-news-inner">
                                                <h3><a href="{{route('cf.cfType',$product->id)}}">{{$product->name}}</a></h3>
                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>
                                @endforeach


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


        <!-- BEGIN STEPS -->

@endsection
