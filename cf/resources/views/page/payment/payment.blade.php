@extends('welcome')
@section('content')

<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Thông tin khách hàng</h1>
                <div class="goods-page">
                    <div class="goods-data">
                    <form id="customer_info" class="form-horizontal" role="form" action="{{ route('store-CheckOut') }}" method="post">
                        @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Họ và tên *</label>
                                    <div class="col-md-9">
                                        <div class="input-large">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input name="name" type="text" class="form-control" placeholder="Họ tên khách hàng" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Điện thoại *</label>
                                    <div class="col-md-9">
                                        <div class="input-large">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-mobile"></i>
                                                </span>
                                                <input name="phone_number" type="tel" class="form-control" placeholder="Số điện thoại" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <div class="input-large">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input name="email" type="email" class="form-control" placeholder="Địa chỉ email" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Địa chỉ giao hàng *</label>
                                    <div class="col-md-9">
                                        <div class="input-large">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-mobile"></i>
                                                </span>
                                                <input name="address" type="text" class="form-control" placeholder="Địa chỉ giao hàng" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ghi chú</label>
                                    <div class="col-md-9">
                                        <div class="input-large">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clipboard"></i>
                                                </span>
                                                <textarea name="note" class="form-control" style="height:70px"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <div class="g-recaptcha" data-sitekey="6LeLRyYTAAAAAD5N8j5CxVhBdl47lWH-mxQmOJgY"></div>
                                    </div>
                                </div>

                            </div>

                            <h1>Kiểm tra sản phẩm</h1>


                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image"></td>
                                        <td class="description">Tên</td>
                                        <td class="price">đơn giá</td>
                                        <td class="quantity">số lượng</td>
                                        <td class="total">tổng tiền</td>
                                        <td></td>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $v_content)

                                    <tr>
                                        <td class="cart_product">
                                        <a href=""><img src="{{$v_content->image}}" alt=""></a>
                                        <input type="hidden" name="image" value="{{$v_content->image}}">
                                    </td>
                                        <td class="cart_description">
                                            <h4><a href="">{{$v_content->name}}</a></h4>
                                        <input type="hidden" name="name_product" value="{{$v_content->name}}">

                                            <p>Web ID: 1089772</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{number_format($v_content->price).''.'vnđ'}}</p>
                                        <input type="hidden" name="price" value="{{$v_content->price}}">

                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">

                                            <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                                    {{ csrf_field() }}
                                                <a class="cart_quantity_up" href=""> {{$v_content->qty}} </a>
                                                {{-- <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}"> --}}
                                                <input type="hidden" name="qty" value="{{$v_content->qty}}">

                                            <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">

                                                {{-- <input type="submit" value="Cập Nhật" name="update_qty" class="btn btn-default btn-sm"> --}}
                                                {{-- <a class="cart_quantity_down" href=""> - </a> --}}
                                                </form>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                        <p class="cart_total_price">
                                            <?php
                                                $total = $v_content->price * $v_content->qty;
                                                echo number_format($total).''.'vnđ';

                                            ?>
                                        <input type="hidden" name="total" value="{{$total}}">

                                        </p>
                                        </td>
                                        <td class="cart_delete">
                                        {{-- <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i>Bỏ</a> --}}
                                        </td>
                                    </tr>



                                    @endforeach



                                </tbody>
                            </table>
                            <ul>
                                <li>Tổng  <span>{{Cart::subtotal().''.'vnđ' }}</span></li>
                                <input type="hidden" name="subtotal" value="{{Cart::subtotal()}}">


                                {{-- <li>Thuế <span>{{Cart::tax().''.'vnđ' }}</span></li> --}}
                                <li>Phí vận chuyển <span>Free</span></li>
                                <li>thành tiền <span>{{Cart::subtotal().''.'vnđ' }}</span></li>
                            </ul>
                            <div class="form-actions fluid">
                                <button class="btn btn-primary pull-right" type="submit" onclick="">Hoàn tất <i class="fa fa-check"></i></button>
                                <a href="/show-cart" class="btn green pull-right margin-right-10">Giỏ hàng <i></i></a>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>


@endsection
