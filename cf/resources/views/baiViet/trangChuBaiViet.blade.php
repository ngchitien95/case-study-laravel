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
                        <div class="col-md-8 col-sm-8 blog-posts">
                            @foreach ($baiviet as $post)
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" alt="" height="200" width="200" src="{{$post->image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="/blog/post/4019">{{$post->title}}</a></h2>
                                            <ul class="blog-info">
                                                <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i>{{$post->created_at}}</li>
                                                <li><i class="fa fa-eye"></i> 18</li>
                                            </ul>
                                            <p>{{$post->describe}}</p>
                                            <a href="/blog/post/4019" class="more">Đọc tiếp <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                            @endforeach

                            {{-- <ul class="pagination">
                                                                <li class="active"><a href="/blog/1">1</a></li>
                                    <li><a href="/blog/2">2</a></li>
                                    <li><a href="/blog/3">3</a></li>
                                                                    <li><a href="/blog/2">Sau</a></li>
                            </ul> --}}

                            {{-- <div class="row"></div> --}}
                        </div>
                        <!-- END LEFT SIDEBAR -->
                        <!-- BEGIN RIGHT SIDEBAR -->
                        <div class="col-md-4 col-sm-4 blog-sidebar">
                            <!-- CATEGORIES START -->

                            <!-- CATEGORIES END -->
                            <!-- BEGIN RECENT NEWS -->
                            <h2>Tin mới</h2>
                            <div class="recent-news margin-bottom-10">
                                    <p>Không có bài viết</p>

                            </div>
                            <!-- END RECENT NEWS -->
                            <hr />
                            <!-- BEGIN MOST READ -->
                            <h2>XEM NHIỀU NHẤT</h2>
                            <div class="recent-news margin-bottom-10">
                                    <p>Không có bài viết</p>
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
