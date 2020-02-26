<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        // dd(Session::get('cart')["default"]->toArray());
        $cart = Session::get('cart')["default"]->toArray();
        // dd($cart);
        $cus = new customer();

        $cus->name = $request->input('name');
        $cus->email = $request->input('email');
        $cus->address = $request->input('address');
        $cus->phone_number = $request->input('phone_number');
        $cus->note = $request->input('note');
        $cus->save();

        $bill = new Bill();
        $bill->customer_id = $cus->id;
        $bill->date_order = date('Y-m-d');
        $bill->note = $request->input('note');
        $bill->total =  $request->input('subtotal');
        $bill->save();

        foreach ($cart as $key => $value) {
            $bill_detail = new BillDetail();
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $value['id'];
            $bill_detail->quanlitin = $value['qty'];
            $bill_detail->unit_price = $value['price'];
            $bill_detail->save();
        }
        Session::forget('cart');
      return redirect()->route('trang-chu');
    }

}
